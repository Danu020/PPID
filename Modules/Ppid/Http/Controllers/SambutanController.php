<?php

namespace Modules\Ppid\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ppid\Entities\Sambutan;


class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $sambutan = Sambutan::when($search, function ($query, $search) {
            return $query->where('judul', 'like', "%{$search}%")
                         ->orWhere('nama_direktur', 'like', "%{$search}%")
                         ->orWhere('jabatan', 'like', "%{$search}%");
        })->get();
        return view('ppid::sambutan.index', compact('sambutan'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('ppid::sambutan.add');
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
            'nama_direktur' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'isi' => 'required|string',
            'media' => 'nullable|url',
        ]);
        Sambutan::create([
            'judul' => $request->judul,
            'nama_direktur' => $request->nama_direktur,
            'jabatan' => $request->jabatan,
            'isi' => $request->isi,
            'media' => $request->media,
        ]);
        return redirect()->route('sambutan.index')->with('success', 'Data berhasil ditambahkan.');
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
        $sambutan = Sambutan::findOrFail($id);
        return view('ppid::sambutan.edit', compact('sambutan'));
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
            'nama_direktur' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'isi' => 'required|string',
            'media' => 'nullable|url',
        ]);
        $sambutan = Sambutan::findOrFail($id);
        $sambutan->update($request->all());
        return redirect()->route('sambutan.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $sambutan = Sambutan::findOrFail($id);
        $sambutan->delete();
        return redirect()->route('sambutan.index')->with('success', 'Data berhasil dihapus');
    }
}
