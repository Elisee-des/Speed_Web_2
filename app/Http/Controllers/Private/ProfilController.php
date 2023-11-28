<?php

namespace App\Http\Controllers\Private;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProfilController extends Controller
{
    public function profil_accueil()
    {
        return view('private.profil.accueil');
    }

    public function profil_edition()
    {
        return view('private.profil.edition');
    }

    public function edit_profil_action(Request $request)
    {
        Validator::make($request->all(), [
            'nom_prenom' => 'required|string|min:5',
            'telephone' => 'required|int|min:8',
            'ufr' => 'required',
            // 'email' => 'required|string|max:250',
            'ine' => 'required|string|min:12|max:12',
            'filiere' => 'required',
            'niveau_licence' => 'required',
            'promotion' => 'required',
        ])->validate();

        $user = Auth()->user();

        $user->nom_prenom = $request->nom_prenom;
        $user->telephone = $request->telephone;
        $user->ufr = $request->ufr;
        $user->ine = $request->ine;
        $user->filiere = $request->filiere;
        $user->niveau_licence = $request->niveau_licence;
        $user->promotion = $request->promotion;

        $user->save();

        // return back()->with('message', 'Profil mise à jour avec succès.');
        return redirect()->route('profil.accueil')->with('message', 'Profil mise à jour avec succès.');
    }

    public function profil_mot_de_passe()
    {
        return view('private.profil.edition-motdepasse');
    }

    public function profil_mot_de_passe_action(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'new_password' => 'required|min:4|confirmed',
            ],
            [
                'new_password.required' => 'Le champ mot de passe est requis.',
                'new_password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'new_password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            ]
        );

        //On retourn tout les erreurs
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth()->user();
        $user->password = $request->new_password;
        $user->save();

        return redirect()->route('profil.accueil')->with('message', 'Mot de passe changer avec succès.');
    }

    public function profil_edition_image()
    {
        $user = auth()->user();
        return view('private.profil.edition-image', ['user' => $user]);
    }

    public function profil_edition_image_action(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'new_image' => 'required|file|mimes:jpeg,png,jpg|max:5120',
            ],
            [
                'new_image.required' => 'Le champ image est requis.',
                'new_image.file' => 'Le champ doit être un fichier.',
                'new_image.mimes' => 'Le fichier doit être de type :values.',
                'new_image.max' => 'La taille du fichier ne doit pas dépasser :max kilo-octets.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // dd($request->new_image);

        $user = auth()->user(); // ou récupère l'utilisateur d'une autre manière

        // Supprime l'image précédente s'il y en a une
        if ($user->image) {
            Storage::delete($user->image->url); // Supprime le fichier physique
            $user->image->delete(); // Supprime l'entrée de la base de données
        }

        $photo_64 = $request->new_image; //your base64 encoded data
        // $extension = explode('/', explode(':', substr($pdf_64, 0, strpos($pdf_64, ';')))[1])[1];   // .jpg .png .pdf
        $replace = substr($photo_64, 0, strpos($photo_64, ',') + 1);
        $file = str_replace($replace, '', $photo_64);
        $myImage = str_replace(' ', '+', $file);
        $filename = $request->file('new_image')->getClientOriginalName();

        Storage::disk('public')->put('uploads/images/profil/' . $filename, base64_decode($myImage));
        $path = 'uploads/images/profil/' . $filename;

        $nouvelleImage = Image::updateOrCreate(
            ['user_id' => $user->id],
            [
                'nom' => $request->file('new_image')->getClientOriginalName(),
                'url' => $path,
            ]
        );

        $user->image()->save($nouvelleImage);

        return redirect()->back()->with('message', 'Image edité avec succès.');
    }

    public function profil_edition_email()
    {
        return view('private.profil.edition-email');
    }

    public function profil_edition_email_action(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'new_email' => 'required|email',
            ],
            [
                'new_email.required' => 'Le champ email est requis.',
                'new_email.email' => 'Veuillez entrer une adresse email valide.',
            ]
        );

        //On retourn tout les erreurs
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth()->user();
        $user->email = $request->new_email;
        $user->save();

        return redirect()->route('profil.accueil')->with('message', 'Email changer avec succès.');
    }
}
