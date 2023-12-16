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
                'images' => 'required',
            ],
            [
                'nom.required' => 'Le champ nom est requis.',
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

        $affiche = Affiche::create([
            'nom' => $request->nom,
            'niveau_etude' => $request->niveau_etude,
            'session' => $request->session,
            'categorie_id' => $request->categorie_id,
            'semestre_id' => $semestre->id,
        ]);

        // Traitement des images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $path = 'images/affiches/' . $imageName;

                // Redimensionner l'image si nécessaire
                $img = Image::make($image->getRealPath());
                Storage::disk('public')->put($path, (string)$img->encode());

                $affiche->images()->create(['nom' => $image->getClientOriginalName(), 'path' => $imageName]);
            }
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
