<?php

namespace Modules\Ppid\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ppid\Entities\Tugasdanfungsi;

class TugasdanfungsiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $tugasdanfungsi = Tugasdanfungsi::when($search, function ($query, $search) {
            return $query->where('judul', 'like', "%{$search}%")
                         ->orWhere('tugas', 'like', "%{$search}%")
                         ->orWhere('fungsi', 'like', "%{$search}%");
        })->get();

        return view('ppid::tugasdanfungsi.index', compact('tugasdanfungsi'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('ppid::tugasdanfungsi.add');
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
            'tugas' => 'required|string',
            'fungsi' => 'required|string',
        ]);

        TugasDanFungsi::create([
            'judul' => $request->judul,
            'tugas' => $request->tugas,
            'fungsi' => $request->fungsi,
        ]);

        return redirect()->route('tugasdanfungsi.index')->with('success', 'Data berhasil ditambahkan.');
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
        $tugasdanfungsi = TugasdanFungsi::findOrFail($id);
        return view('ppid::tugasdanfungsi.edit', compact('tugasdanfungsi'));
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
            'tugas' => 'required|string',
            'fungsi' => 'required|string',
        ]);

        $item = TugasDanFungsi::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('tugasdanfungsi.index')->with('success', 'Data berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $item = TugasDanFungsi::findOrFail($id);
        $item->delete();

        return redirect()->route('tugasdanfungsi.index')->with('success', 'Data berhasil dihapus.');
    }
}
