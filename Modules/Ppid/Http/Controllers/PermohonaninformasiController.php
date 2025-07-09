<?php

namespace Modules\Ppid\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ppid\Entities\Permohonaninformasi;

class PermohonaninformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $permohonaninformasi = Permohonaninformasi::when($search, function ($query, $search) {
        return $query->where('nama_pemohon', 'like', "%{$search}%")
                     ->orWhere('nik', 'like', "%{$search}%");
    })->get();

    return view('ppid::permohonaninformasi.index', compact('permohonaninformasi'));
}


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('ppid::permohonan.add');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemohon' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'alamat_pemohon' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email',
            'informasi_yang_dibutuhkan' => 'required|string',
            'alasan_permohonan' => 'required|string',
        ]);
        Permohonaninformasi::create([
            'nama_pemohon' => $request->nama_pemohon,
            'nik' => $request->nik,
            'alamat_pemohon' => $request->alamat_pemohon,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'informasi_yang_dibutuhkan' => $request->informasi_yang_dibutuhkan,
            'alasan_permohonan' => $request->alasan_permohonan,
            'status' => 'menunggu', // default saat input
        ]);
        return redirect()->route('permohonan.index')->with('success', 'Data berhasil ditambahkan.');
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
        $permohonaninformasi = Permohonaninformasi::findOrFail($id);
        return view('ppid::permohonan.edit', compact('permohonan'));
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
            'nama_pemohon' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'alamat_pemohon' => 'required|string',
            'nomor_telepon' => 'required|string|max:20',
            'email' => 'required|email',
            'informasi_yang_dibutuhkan' => 'required|string',
            'alasan_permohonan' => 'required|string',
            'status' => 'required|string|in:menunggu,diproses,ditolak,diterima'
        ]);
        $permohonaninformasi = Permohonaninformasi::findOrFail($id);
        $permohonaninformasi->update($request->all());
        return redirect()->route('permohonan.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $permohonaninformasi = Permohonaninformasi::findOrFail($id);
        $permohonaninformasi->delete();
        return redirect()->route('permohonan.index')->with('success', 'Data berhasil dihapus');
    }
}
