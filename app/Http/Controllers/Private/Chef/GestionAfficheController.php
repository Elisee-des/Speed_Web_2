<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use App\Models\Affiche;
use App\Models\Categorie;
use App\Models\Semestre;
use Illuminate\Http\Request;
use App\Models\Image as ImageModel;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class GestionAfficheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajout_affiche($idSemestre)
    {
        $semestre = Semestre::find($idSemestre);
        $categories =  Categorie::all();
        return view('private.chef.gestion-affiches.create', [
            'semestre'  => $semestre,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ajout_affiche_action(Request $request, $idSemestre)
    {
        $semestre = Semestre::find($idSemestre);
        $user = auth()->user();

        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'niveau_etude' => 'required',
                'session' => 'required',
                'images' => 'required|array|min:1', // Au moins un fichier doit être présent
                'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ],
            [
                'nom.required' => 'Le champ nom est requis.',
                'session.required' => 'Le champ session est requis.',
                'niveau_etude.required' => "Le champ niveau d'etude est requis.",
                'images' => 'required|array|min:1', // Au moins un fichier doit être présent
                'images.*.image' => 'Le fichier doit être une image.',
                'images.*.mimes' => 'Les images doivent être de type :jpeg, :png, :jpg ou :gif.',
                'images.*.max' => 'La taille maximale de chaque image est de 2048 kilo-octets.',
            ]
        );

        // dd("OK ce sont des images");

        if ($request->hasFile('images')) {

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $affiche = Affiche::create([
                'nom' => $request->nom,
                'niveau_etude' => $request->niveau_etude,
                'session' => $request->session,
                'categorie_id' => $request->categorie_id,
                'semestre_id' => $semestre->id,
            ]);

            // Traitement des images
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $path = 'images/affiches/' . $imageName;

                // Redimensionner l'image si nécessaire
                $img = Image::make($image->getRealPath());
                Storage::disk('public')->put($path, (string)$img->encode());

                $affiche->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
            }
        } else {
            return redirect()->back()->with('error', "Vous devez sélectionner des images !");
        }

        return redirect()->route('delegue.affiches.detail', ['idSemestre' => $semestre->id, 'idAffiche' => $affiche->id])->with('success', "{$affiche->nom} ajouté avec succès !!!.");
    }


    /**
     * Display the specified resource.
     */
    public function detail_affiche($idSemestre, $idAffiche)
    {
        $semestre = Semestre::find($idSemestre);
        $affiche = Affiche::find($idAffiche);

        return view('private.chef.gestion-affiches.detail', ['semestre'  => $semestre, 'affiche' => $affiche]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edition_nom_affiche(Request $request, $idAffiche)
    {
        $user = auth()->user();


        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
            ],
            [
                'nom.required' => 'Le champ nom est requis.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($user->hasRole('Delegue')) {
            $affiche = Affiche::find($idAffiche);
            $affiche->nom = $request->nom;
            $affiche->save();

            return redirect()->back()->with('success', "Le nom de l'affiche' a été modifié avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function edition_image($idAffiche, $idImage, Request $request)
    {
        $user = auth()->user();

        if ($user->hasRole('Delegue')) {
            $imageOld = ImageModel::where('id', $idImage)->where('affiche_id', $idAffiche)->first();

            $validator = Validator::make(
                $request->all(),
                [
                    'image' => 'required|file|mimes:jpeg,png,jpg|max:5120',
                ],
                [
                    'image.required' => 'Le champ image est requis.',
                    'image.file' => 'Le champ doit être un fichier.',
                    'image.mimes' => 'Le fichier doit être de type :values.',
                    'image.max' => 'La taille du fichier ne doit pas dépasser :max kilo-octets.',
                ]
            );
    
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // Vérifier si une image existe avant de la supprimer
            if ($imageOld) {
                // Supprimer l'ancienne image du stockage
                $oldImagePath = 'images/affiches/' . $imageOld->path;
                Storage::disk('public')->delete($oldImagePath);
            }

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $path = 'images/affiches/' . $imageName;

                // Redimensionner l'image si nécessaire
                $img = Image::make($image->getRealPath());
                Storage::disk('public')->put($path, (string)$img->encode());

                if (!$imageOld) {
                    // Créer une nouvelle instance s'il n'y a pas d'ancienne image
                    $imageOld = new ImageModel();
                    $imageOld->affiche_id = $idAffiche;
                }

                $imageOld->nom = $image->getClientOriginalName();
                $imageOld->path = $imageName;

                $imageOld->save();
                return redirect()->back()->with('success', "Image éditée avec succès.");
            }
            return redirect()->back()->with('error', "Vous devez sélectionner une image !");
        } else {
            return redirect()->back()->with('error', "Vous n'avez pas les droits requis.");
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function suppression_image($idAffiche, $idImage)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {

            $imageOld = ImageModel::where('id', $idImage)->where('affiche_id', $idAffiche)->get()->first();

            if ($imageOld) {
                // Supprimer l'ancienne image du stockage
                $oldImagePath = 'images/affiches/' . $imageOld->path;
                Storage::disk('public')->delete($oldImagePath);
                $imageOld->delete();
            }

            return redirect()->back()->with('success', "Image supprimée avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }
}
