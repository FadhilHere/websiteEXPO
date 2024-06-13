<?php

namespace App\Http\Controllers;

use App\Models\ManagementKonten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konten = ManagementKonten::all();
        $kategoriOptions = ManagementKonten::whereNotNull('kategori')->pluck('kategori', 'id');
        return view('admin.insertKonten', compact('konten', 'kategoriOptions'));
    }
    public function list()
    {
        $konten = ManagementKonten::all();
        return view('admin.listKonten', compact('konten'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konten.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori' => 'nullable|string|max:255',
            'judul' => 'nullable|string|max:255',
            'jenis' => 'nullable|string|max:255',
            'isi' => 'nullable|string',
            'menu' => 'nullable|string|max:255',
            'submenu' => 'nullable|string|max:255',
            'file.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx,svg',
            'status' => 'nullable|string|max:255',
        ]);
        $files = [];
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $filePath = $file->store('uploads', 'public');
                $files[] = $filePath;
            }
        }
        $validatedData['file'] = json_encode($files);
        ManagementKonten::create($validatedData);
        return redirect()->route('konten.index')->with('success', 'Konten berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManagementKonten  $managementKonten
     * @return \Illuminate\Http\Response
     */
    public function show(ManagementKonten $konten)
    {
        return view('konten.show', compact('konten'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManagementKonten  $managementKonten
     * @return \Illuminate\Http\Response
     */
    public function edit(ManagementKonten $konten)
    {
        return view('konten.edit', compact('konten'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManagementKonten  $managementKonten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManagementKonten $konten)
    {
        $request->validate([
            'kategori' => 'nullable|string',
            'judul' => 'nullable|string',
            'jenis' => 'nullable|string',
            'isi' => 'nullable|string',
            'menu' => 'nullable|string',
            'submenu' => 'nullable|string',
            'file' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $konten->update($request->all());

        return redirect()->route('konten.index')->with('success', 'Konten berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManagementKonten  $managementKonten
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManagementKonten $konten)
    {
        $konten->delete();

        return redirect()->route('konten.list')->with('success', 'Konten berhasil dihapus.');
    }
}
