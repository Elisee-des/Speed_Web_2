<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use App\Models\Image as ImageModel;
use Intervention\Image\Facades\Image;
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

            // Traitement des images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = 'images/resultats/' . $imageName;

                    // Redimensionner l'image si nécessaire
                    $img = Image::make($image->getRealPath())->fit(1397, 1048);
                    Storage::disk('public')->put($path, (string)$img->encode());

                    $resultat->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
                }
            }

            // if($request->hasFile('images'))
            // {
            //     foreach ($request->file('images') as $image) {
            //         $photo_64 = $image;
            //         $replace = substr($photo_64, 0, strpos($photo_64, ',') + 1);
            //         $file = str_replace($replace, '', $photo_64);
            //         $myImage = str_replace(' ', '+', $file);
            //         $filename = $image->getClientOriginalName();

            //         Storage::disk('public')->put('images/resultats/' . $filename, base64_decode($myImage));
            //         $path = 'images/resultats/' . $filename;

            //         $nouvelleImage = Image::updateOrCreate(
            //             ['resultat_id' => $resultat->id],
            //             [
            //                 'nom' => $image->getClientOriginalName(),
            //                 'url' => $path,
            //             ]
            //         );

            //         $resultat->images()->save($nouvelleImage);
            //     }
            // }

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

    public function edition_nom_module(Request $request, $idResultat)
    {
        $user = auth()->user();

        if ($user->hasRole('Delegue')) {
            $resultat = Resultat::find($idResultat);
            $resultat->nom_module = $request->nom_module;
            $resultat->save();

            return redirect()->back()->with('success', "Nom du module modifié avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function suppression_image($idResultat, $idImage)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {
            $image = ImageModel::where('id', $idImage)->where('resultat_id', $idResultat)->get()->first();

            $image->delete();

            return redirect()->back()->with('success', "Image supprimée avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function edition_image($idResultat, $idImage, Request $request)
    {
        $user = auth()->user();
        $resultat = Resultat::find($idResultat);
        if ($user->hasRole('Delegue')) {
            $image = ImageModel::where('id', $idImage)->where('resultat_id', $idResultat)->get()->first();

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = 'images/resultats/' . $imageName;

                    // Redimensionner l'image si nécessaire
                    $img = Image::make($image->getRealPath())->fit(1397, 1048);
                    Storage::disk('public')->put($path, (string)$img->encode());

                    $resultat->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
                }
            }

            return redirect()->back()->with('success', "Image edité avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function ajout_image($idResultat, Request $request)
    {
        $user = auth()->user();
        $resultat = Resultat::find($idResultat);
        if ($user->hasRole('Delegue')) {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = 'images/resultats/' . $imageName;

                    // Redimensionner l'image si nécessaire
                    $img = Image::make($image->getRealPath())->fit(1397, 1048);
                    Storage::disk('public')->put($path, (string)$img->encode());

                    $resultat->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
                }
                return redirect()->back()->with('success', "Image ajouté avec succès.");
            } else {
                return redirect()->back()->with('error', "Vos fichier doivent être des images.");
            }

            // if ($user->hasRole('Delegue') && $request->hasFile('image')) {

            //     $image = $request->file('image');
            //     $imageName = time() . '_' . $image->getClientOriginalName();
            //     $path = 'images/resultats/' . $imageName;
            //     // Redimensionner l'image si nécessaire
            //     $img = Image::make($image->getRealPath())->fit(1397, 1048);
            //     Storage::disk('public')->put($path, (string)$img->encode());

            //     $resultat->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);

            //     return redirect()->back()->with('success', "Image supprimer avec succès.");
            // }

        } else {
            return redirect()->back()->with('error', "Vous n'avez pas les droits requis.");
        }
    }
}
