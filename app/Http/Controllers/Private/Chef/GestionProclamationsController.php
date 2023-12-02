<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use App\Models\Proclamation;
use Illuminate\Http\Request;
use App\Models\Image as ImageModel;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GestionProclamationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $proclamations = Proclamation::where('user_id', $user->id)->get();
        return view('private.chef.gestion-proclamations.index', compact('proclamations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.chef.gestion-proclamations.create');
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

            $proclamation = Proclamation::create([
                'nom_module' => $request->nom_module,
                'niveau_licence' => $request->niveau_licence,
                'session' => $request->session,
                'user_id' => $user->id,
            ]);

            // Traitement des images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = 'images/proclamations/' . $imageName;

                    // Redimensionner l'image si nécessaire
                    $img = Image::make($image->getRealPath());
                    Storage::disk('public')->put($path, (string)$img->encode());

                    $proclamation->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
                }
            }

            return redirect()->route('delegue.proclamations.index')->with('message', 'Proclamation ajouté avec succès !!!.');
        } else {
            return redirect()->back()->with('error', "Echec !!! Vous n'avez pas les droits.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $idProclamation)
    {
        $proclamation = Proclamation::find($idProclamation);
        return view('private.chef.gestion-proclamations.detail', ['proclamation' => $proclamation]);
    }

    public function edition_nom_module(Request $request, $idProclamation)
    {
        $user = auth()->user();

        if ($user->hasRole('Delegue')) {
            $proclamation = Proclamation::find($idProclamation);
            $proclamation->nom_module = $request->nom_module;
            $proclamation->save();

            return redirect()->back()->with('success', "Nom de la proclamation a été modifié avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idProclamation)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {

            $proclamation = Proclamation::find($idProclamation);
            $proclamation->delete();

            return redirect()->route('delegue.proclamations.index')->with('success', "Proclamation supprimée avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function suppression_image($idProclamation, $idImage)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {

            $image = ImageModel::where('id', $idImage)->where('proclamation_id', $idProclamation)->get()->first();
            Storage::delete($image->path); // Supprime le fichier physique
            $image->delete();

            return redirect()->back()->with('success', "Image supprimée avec succès.");
        } else {
            return redirect()->back()->with('error', "Vous n'êtes pas les droits requis.");
        }
    }

    public function edition_image($idProclamation, $idImage, Request $request)
    {
        $user = auth()->user();
        $proclamation = Proclamation::find($idProclamation);
        if ($user->hasRole('Delegue')) {
            $imageOld = ImageModel::where('id', $idImage)->where('proclamation_id', $idProclamation)->get()->first();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $path = 'images/proclamations/' . $imageName;

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

    public function ajout_image($idProclamation, Request $request)
    {
        $user = auth()->user();
        $proclamation = Proclamation::find($idProclamation);
        if ($user->hasRole('Delegue')) {

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = 'images/proclamations/' . $imageName;

                    // Redimensionner l'image si nécessaire
                    $img = Image::make($image->getRealPath());
                    Storage::disk('public')->put($path, (string)$img->encode());

                    $proclamation->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
                }
                return redirect()->back()->with('success', "Image ajouté avec succès.");
            } else {
                return redirect()->back()->with('error', "Vos fichier doivent être des images.");
            }

        } else {
            return redirect()->back()->with('error', "Vous n'avez pas les droits requis.");
        }
    }

    public function affiche_resultat($idProclamation)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {
            $proclamation = Proclamation::find($idProclamation);
            $proclamation->actif = 1;
            $proclamation->update();
            
            return redirect()->back()->with('success', "L'opération est un succès.");
        }
    }
    
    public function cache_resultat($idProclamation)
    {
        $user = auth()->user();
        if ($user->hasRole('Delegue')) {
            $proclamation = Proclamation::find($idProclamation);
            $proclamation->actif = 0;
            $proclamation->update();

            return redirect()->back()->with('success', "L'opération est un succès.");
        }
    }
}
