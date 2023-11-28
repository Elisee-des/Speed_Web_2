<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Resultat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GestionResultatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {
            $resultats = Resultat::where('user_id', $user->id)->get();
            return view('private.chef.gestion-resultats.index', compact('resultats'));
        } else {
            $resultats = [];
            return view('private.chef.gestion-resultats.index', compact('resultats'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.chef.gestion-resultats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {

            $validator = Validator::make(
                $request->all(),
                [
                    'nom_module' => 'required',
                    'niveau_licence' => 'required',
                    'session' => 'required',
                    'images' => 'required',
                ],
                [
                    'nom_module.required' => 'Le champ nom du module est requis.',
                    'session.required' => 'Le champ session est requis.',
                    'niveau_licence.required' => "Le champ niveau d'etude est requis.",
                    'images.required' => 'Le champ images est requis.',
                ]
            );

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $resultat = Resultat::create([
                'nom_module' => $request->nom_module,
                'niveau_licence' => $request->niveau_licence,
                'session' => $request->session,
                'user_id' => $user->id,
            ]);

            $images = $request->file('images');

            foreach ($images as $image) {
                $photo_64 = $image; //your base64 encoded data
                // $extension = explode('/', explode(':', substr($pdf_64, 0, strpos($pdf_64, ';')))[1])[1];   // .jpg .png .pdf
                $replace = substr($photo_64, 0, strpos($photo_64, ',') + 1);
                $file = str_replace($replace, '', $photo_64);
                $myImage = str_replace(' ', '+', $file);
                $filename = $image->getClientOriginalName();

                Storage::disk('public')->put('uploads/images/resultats/' . $filename, base64_decode($myImage));
                $path = 'uploads/images/resultats/' . $filename;

                $nouvelleImage = Image::updateOrCreate(
                    ['resultat_id' => $resultat->id],
                    [
                        'nom' => $image->getClientOriginalName(),
                        'url' => $path,
                    ]
                );

                $resultat->images()->save($nouvelleImage);
            }

            return redirect()->route('delegue.resultats.index')->with('message', 'Résultat ajouter avec succès !!!.');
        } else {
            return redirect()->back()->with('error', "Echec !!! Vous n'avez pas les droits.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($idResultat)
    {
        $resultat = Resultat::find($idResultat);
        return view('private.chef.gestion-resultats.detail', ['resultat' => $resultat]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

    public function parametre_liste()
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {
            $resultats = Resultat::where('user_id', $user->id)->get();
            return view('private.chef.gestion-resultats.parametre', compact('resultats'));
        } else {
            $resultats = [];
            return view('private.chef.gestion-resultats.index', compact('resultats'));
        }
    }
}
