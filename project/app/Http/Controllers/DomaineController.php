<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listes = Domaine::all();
        return View('backend.pages.domaines.list', compact('listes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('backend.pages.domaines.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Domaine::create([
            'libelle' => $request->libelle,
            'image' => $request->image->store('images', 'public'),
            'politique' => $request->politique,
            'contenu' => $request->contenu,
            'carte' => $request->carte->store('images', 'public'),
        ]);

        return redirect()->route('gestion_domaines.index')->with('status', 'Domaines ajouté avec succès!');
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
