<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use App\Models\Deleiberation;
use Illuminate\Http\Request;
use App\Models\Image as ImageModel;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GestionDeliberationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $deliberations = Deleiberation::where('user_id', $user->id)->get();
        return view('private.chef.gestion-deliberations.index', compact('deliberations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.chef.gestion-deliberations.create');
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

            $deliberation = Deleiberation::create([
                'nom_module' => $request->nom_module,
                'niveau_licence' => $request->niveau_licence,
                'session' => $request->session,
                'user_id' => $user->id,
            ]);

            // Traitement des images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = 'images/deliberations/' . $imageName;

                    // Redimensionner l'image si nécessaire
                    $img = Image::make($image->getRealPath());
                    Storage::disk('public')->put($path, (string)$img->encode());

                    $deliberation->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
                }
            }

            return redirect()->route('delegue.deliberations.index')->with('message', 'Délibération ajoutée avec succès !!!.');
        } else {
            return redirect()->back()->with('error', "Echec !!! Vous n'avez pas les droits.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idDeliberation)
    {
        $deliberation = Deleiberation::find($idDeliberation);
        return view('private.chef.gestion-deliberations.detail', ['deliberation' => $deliberation]);
    }

    public function edition_nom_module(Request $request, $idDeliberation)
    {
        $user = auth()->user();

        if ($user->hasRole('Delegue')) {
            $deliberation = Deleiberation::find($idDeliberation);
            $deliberation->nom_module = $request->nom_module;
            $deliberation->save();

            return redirect()->back()->with('success', "Le nom de la délibération a été modifié avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
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
    public function destroy($idDeliberation)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {

            $deliberation = Deleiberation::find($idDeliberation);
            $deliberation->delete();

            return redirect()->route('delegue.deliberations.index')->with('success', "Délibération supprimée avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function suppression_image($idDeliberation, $idImage)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {

            $image = ImageModel::where('id', $idImage)->where('deleiberation_id', $idDeliberation)->get()->first();
            Storage::delete($image->path); // Supprime le fichier physique
            $image->delete();

            return redirect()->back()->with('success', "Image supprimée avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function edition_image($idDeliberation, $idImage, Request $request)
    {
        $user = auth()->user();
        $deliberation = Deleiberation::find($idDeliberation);
        if ($user->hasRole('Delegue')) {
            $imageOld = ImageModel::where('id', $idImage)->where('deleiberation_id', $idDeliberation)->get()->first();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $path = 'images/deliberations/' . $imageName;

                // Redimensionner l'image si nécessaire
                $img = Image::make($image->getRealPath());
                Storage::disk('public')->put($path, (string)$img->encode());

                $imageOld->nom = $image->getClientOriginalName();
                $imageOld->path = $imageName;

                $imageOld->save();
            }

            return redirect()->back()->with('success', "Image edité avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function ajout_image($idDeliberation, Request $request)
    {
        $user = auth()->user();
        $deliberation = Deleiberation::find($idDeliberation);
        if ($user->hasRole('Delegue')) {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = 'images/deliberations/' . $imageName;

                    // Redimensionner l'image si nécessaire
                    $img = Image::make($image->getRealPath());
                    Storage::disk('public')->put($path, (string)$img->encode());

                    $deliberation->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
                }
                return redirect()->back()->with('success', "Image ajouté avec succès.");
            } else {
                return redirect()->back()->with('error', "Vos fichier doivent être des images.");
            }

        } else {
            return redirect()->back()->with('error', "Vous n'avez pas les droits requis.");
        }
    }

    public function affiche_resultat($idDeliberation)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {
            $deliberation = Deleiberation::find($idDeliberation);
            $deliberation->actif = 1;
            $deliberation->update();

            return redirect()->back()->with('success', "L'opération est un succès.");
        }
    }

    public function cache_resultat($idDeliberation)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {
            $deliberation = Deleiberation::find($idDeliberation);
            $deliberation->actif = 0;
            $deliberation->update();

            return redirect()->back()->with('success', "L'opération est un succès.");
        }
    }
}
