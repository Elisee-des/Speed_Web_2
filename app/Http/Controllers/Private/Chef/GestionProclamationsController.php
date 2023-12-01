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
                    $img = Image::make($image->getRealPath())->fit(1397, 1048);
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
    public function show(string $idResultat)
    {
        return view('private.chef.gestion-proclamations.detail', ['idResultat' => $idResultat]);
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
}
