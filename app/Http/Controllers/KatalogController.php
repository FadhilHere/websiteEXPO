<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalog = Katalog::all();
        return view('admin.insertKatalog', compact('katalog'));
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
        $validatedData = $request->validate([
            'kategori' => 'nullable|string|max:255',
            'judul' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'foto.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'video' => 'nullable|file|mimes:mp4,mov,avi|max:20480',
            'tahun' => 'nullable|date',
            'status' => 'nullable|string|max:255',
        ]);

        $files = [];
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $file) {
                $filePath = $file->store('uploads', 'public');
                $files[] = $filePath;
            }
        }
        $validatedData['foto'] = json_encode($files);

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
            $validatedData['video'] = $videoPath;
        }
        Katalog::create($validatedData);

        return redirect()->route('katalog.index')->with('success', 'Katalog berhasil ditambahkan');
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
