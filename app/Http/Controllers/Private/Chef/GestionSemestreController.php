<?php

namespace App\Http\Controllers\Private\Chef;

use App\Http\Controllers\Controller;
use App\Models\Semestre;
use Illuminate\Http\Request;

class GestionSemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $semestres = Semestre::where('user_id', $user->id)->get();
        return view('private.chef.gestion-semestres.index', compact('semestres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.chef.gestion-semestres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
