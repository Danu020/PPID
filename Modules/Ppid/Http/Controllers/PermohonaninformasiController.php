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
    // Untuk pengguna (user biasa)
    public function index(Request $request)
    {
        $search = $request->input('search');
        $permohonaninformasi = Permohonaninformasi::when($search, function ($query, $search) {
            return $query->where('nama_pemohon', 'like', "%{$search}%")
                         ->orWhere('nik', 'like', "%{$search}%");
        })
        // filter hanya data milik user jika ada sistem user_id, contoh:
        // ->where('user_id', auth()->id())
        ->get();
        return view('ppid::pemohon.index', compact('permohonaninformasi'));
    }

    // Untuk admin (tampilan admin)
    public function adminIndex(Request $request)
    {
        $search = $request->input('search');
        $permohonaninformasi = Permohonaninformasi::when($search, function ($query, $search) {
            return $query->where('nama_pemohon', 'like', "%{$search}%")
                         ->orWhere('nik', 'like', "%{$search}%");
        })->get();
        return view('ppid::datapemohon.index', compact('datapemohon'));
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Request $request)
    {
        // Jika route berasal dari datapemohon, gunakan view datapemohon
        if ($request->route()->getName() === 'datapemohon.create') {
            return view('ppid::datapemohon.create');
        }
        return view('ppid::permohonaninformasi.add');
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
        // Redirect sesuai asal route
        if ($request->route()->getName() === 'datapemohon.store') {
            return redirect()->route('datapemohon.index')->with('success', 'Data berhasil ditambahkan.');
        }
        return redirect()->route('permohonaninformasi.index')->with('success', 'Data berhasil ditambahkan.');
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
    public function edit(Request $request, $id)
    {
        $permohonaninformasi = Permohonaninformasi::findOrFail($id);
        if ($request->route()->getName() === 'datapemohon.edit') {
            return view('ppid::datapemohon.edit', compact('permohonaninformasi'));
        }
        return view('ppid::permohonaninformasi.edit', compact('permohonaninformasi'));
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
        if ($request->route()->getName() === 'datapemohon.update') {
            return redirect()->route('datapemohon.index')->with('success', 'Data berhasil diperbarui');
        }
        return redirect()->route('permohonaninformasi.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Request $request, $id)
    {
        $permohonaninformasi = Permohonaninformasi::findOrFail($id);
        $permohonaninformasi->delete();
        if ($request->route()->getName() === 'datapemohon.destroy') {
            return redirect()->route('datapemohon.index')->with('success', 'Data berhasil dihapus');
        }
        return redirect()->route('permohonaninformasi.index')->with('success', 'Data berhasil dihapus');
    }
}
