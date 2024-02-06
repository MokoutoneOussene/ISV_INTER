<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Domaine;
use App\Models\ImageDomaine;
use App\Models\Mediatheque;
use App\Models\Rapport;
use App\Models\SousDomaine;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('pages.welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function accueil()
    {
        return View('pages.accueil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function motPresi()
    {
        return View('pages.presidentWord');
    }

    /**
     * Display the specified resource.
     */
    public function domaineCompetence()
    {
        $collection = Domaine::all();
        return View('pages.competences', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function dashboard()
    {
        return View('backend.accueil');
    }

    /**
     * Update the specified resource in storage.
     */
    public function findDomaine(string $id)
    {
        $finds = Domaine::find($id);
        $collection = SousDomaine::where('domaines_id', '=', $id)->get();
        return view('pages.findDomaine', compact('finds', 'collection'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function findSousDomaine(string $id)
    {
        $finds = SousDomaine::find($id);
        $collection = ImageDomaine::where('sous_domaines_id', '=', $id)->get();
        return view('pages.findSousDomaine', compact('finds', 'collection'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function rapport()
    {
        return view('pages.rapport');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function modeIntervention()
    {
        return view('pages.modeIntervention');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function mediatheque()
    {
        $collection = Mediatheque::all();
        return view('pages.mediatheque', compact('collection'));
    }
}
