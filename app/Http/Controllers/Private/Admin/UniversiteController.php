<?php

namespace App\Http\Controllers\Private\Admin;

use App\Http\Controllers\Controller;
use App\Models\Universite;
use Illuminate\Http\Request;

class UniversiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universites = Universite::get();
        return view('private.admin.universite.index', compact('universites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if($id)
        {
            $universite = Universite::find($id);
            return view ('private.admin.universite.detail', compact('universite'));
        }
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
        if($id)
        {
            $universite = Universite::find($id);

            $universite->update([
                'nom' => $request->nom,
                'sigle' => $request->sigle,
            ]);

            $universite->save();

            return redirect()->back()->with('success', "Université edité avec succès.");
        }

        return redirect()->back()->with('error', "Cette universite n'existe pas. !");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
