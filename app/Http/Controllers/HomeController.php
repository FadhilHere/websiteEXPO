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
        $loadLogo = ManagementKonten::where('kategori', 'logo')->first();
        $loadHeader = ManagementKonten::where('menu', 'Header')->get();
        $loadSubmenu = ManagementKonten::whereNotNull('submenu')->get()->groupBy('menu');
        return view('index', compact('loadLogo', 'loadHeader', 'loadSubmenu'));


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
