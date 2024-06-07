<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManagementKonten;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loadLogo = ManagementKonten::where('menu', 'Logo')->first();
        $loadLogo = str_replace(['[', ']', '\/', '"'], '', $loadLogo->file);
        $loadLogo = preg_replace('/(uploads)([^\/])/', '$1/$2', $loadLogo);

        $loadHeader = ManagementKonten::where('menu', 'Header')->get();
        $loadDropdown = ManagementKonten::whereNotNull('menu')->get()->groupBy('menu');
        return view('index', compact('loadLogo', 'loadHeader', 'loadDropdown'));
    }

    public function page()
    {
        $loadLogo = ManagementKonten::where('menu', 'Logo')->first();
        $loadLogo = str_replace(['[', ']', '\/', '"'], '', $loadLogo->file);
        $loadLogo = preg_replace('/(uploads)([^\/])/', '$1/$2', $loadLogo);

        $loadHeader = ManagementKonten::where('menu', 'Header')->get();
        $loadDropdown = ManagementKonten::whereNotNull('menu')->get()->groupBy('menu');
        return view('page', compact('loadLogo', 'loadHeader', 'loadDropdown'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
