<?php

namespace Modules\Ppid\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ppid\Entities\StrukturOrganisasi;

class StrukturorganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $struktur = Strukturorganisasi::when($search, function ($query, $search) {
        return $query->where('judul', 'like', "%{$search}%");
    })->get();

    return view('ppid::strukturorganisasi.index', compact('struktur'));
}

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('ppid::strukturorganisasi.add');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
    $request->validate([
        'judul' => 'required|string|max:255',
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $path = $request->file('foto')->store('struktur', 'public');

    StrukturOrganisasi::create([
        'judul' => $request->judul,
        'foto' => $path,
    ]);

    return redirect()->route('struktur.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('ppid::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        return view('ppid::strukturorganisasi.edit', compact('struktur'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $struktur = StrukturOrganisasi::findOrFail($id);
        // $data = ['judul' => $request->judul,];
        // if ($request->hasFile('foto')) {
        //     $data['foto'] = $request->file('foto')->store('struktur', 'public');
        // }
        $struktur->update($request->all());

        return redirect()->route('struktur.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
    $struktur = StrukturOrganisasi::findOrFail($id);
    $struktur->delete();

    return redirect()->route('struktur.index')->with('success', 'Data berhasil dihapus.');
    }
}
