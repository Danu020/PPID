<?php

namespace Modules\Ppid\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ppid\Entities\DataInformasi;
use Modules\Ppid\Entities\JenisInformasi;

class DataInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $datainformasi = DataInformasi::with('jenisInformasi')->get();
        return view('ppid::datainformasi.index', compact('datainformasi'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $jenisInformasi = JenisInformasi::all();
        return view('ppid::datainformasi.create', compact('jenisInformasi'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_informasi' => 'required|string|max:255',
            'jenis_informasi_id' => 'required|exists:jenis_informasis,id',
            'link' => 'nullable|url',
        ]);
        DataInformasi::create($data);
        return redirect()->route('datainformasi.index')->with('success', 'Data Informasi berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $data_informasi = DataInformasi::findOrFail($id);
        $jenisInformasi = JenisInformasi::all();
        return view('ppid::datainformasi.edit', compact('data_informasi', 'jenisInformasi'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data_informasi = DataInformasi::findOrFail($id);
        $data = $request->validate([
            'nama_informasi' => 'required|string|max:255',
            'jenis_informasi_id' => 'required|exists:jenis_informasis,id',
            'link' => 'nullable|url',
        ]);
        $data_informasi->update($data);
        return redirect()->route('datainformasi.index')->with('success', 'Data Informasi berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $data_informasi = DataInformasi::findOrFail($id);
        $data_informasi->delete();
        return redirect()->route('datainformasi.index')->with('success', 'Data Informasi berhasil dihapus.');
    }
}
