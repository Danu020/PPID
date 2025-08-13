<?php

namespace Modules\Ppid\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ppid\Entities\Permohonaninformasi;
use Modules\Ppid\Entities\JenisPermohonan;
use Illuminate\Support\Facades\Storage;

class PermohonaninformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $permohonaninformasi = Permohonaninformasi::with('jenisPermohonan')->latest()->get();

        return view('ppid::pemohon.index', compact('permohonaninformasi'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        // if (auth()->user()->role !== 'masyarakat') {
        //     abort(403, 'anda tidak memiliki akses untuk membuat permohonan informasi.');
        // }
        $jenis_permohonan = JenisPermohonan::all();

        return view('ppid::pemohon.add', compact('jenis_permohonan'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // if (auth()->user()->role !== 'masyarakat') {
        //     abort(403, 'Anda tidak memiliki akses untuk membuat permohonan informasi.');
        // }

         $request->validate([
            'nama_pemohon' => 'required|string|max:255',
            'nik' => 'required|string|max:20',
            'alamat_pemohon' => 'required|string',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|email',
            'informasi_yang_dibutuhkan' => 'required|string',
            'alasan_permohonan' => 'required|string',
            'jenis_permohonan_id' => 'required|exists:jenis_permohonans,id',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048', // Optional file validation
            'catatan' => 'nullable|string|max:500',
        ]);
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('permohonan_files', 'public');
            $request->merge(['file' => $filePath]);
        }

        Permohonaninformasi::create([
            'nama_pemohon' => $request->nama_pemohon,
            'nik' => $request->nik,
            'alamat_pemohon' => $request->alamat_pemohon,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'informasi_yang_dibutuhkan' => $request->informasi_yang_dibutuhkan,
            'alasan_permohonan' => $request->alasan_permohonan,
            'jenis_permohonan_id' => $request->jenis_permohonan_id,
            'status' => 'menunggu',
        ]);

        return redirect()->route('permohonaninformasi.index')->with('success', 'Permohonan informasi berhasil dibuat.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $permohonaninformasi = Permohonaninformasi::with('jenisPermohonan')->findOrFail($id);

        return view('ppid::pemohon.show', compact('permohonaninformasi'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $permohonaninformasi = Permohonaninformasi::findOrFail($id);
        // if (auth()->user()->role !== 'masrayakat' || auth()->id() !== $permohonaninformasi->user_id) {
        //     abort(403, 'Anda tidak memiliki akses untuk mengedit permohonan informasi.');
        // }
        $jenis_permohonan = JenisPermohonan::all();

        return view('ppid::pemohon.edit', compact('permohonaninformasi', 'jenis_permohonan'));
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
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|email',
            'informasi_yang_dibutuhkan' => 'required|string',
            'alasan_permohonan' => 'required|string',
            'jenis_permohonan_id' => 'required|exists:jenis_permohonans,id',
            'status' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048', // Optional file validation
            'catatan' => 'nullable|string|max:500',
        ]);
        $permohonan = Permohonaninformasi::findOrFail($id);
        $data = $request->except('file');
        if ($request->hasfile('file')) {
            if ($request->file && Storage::disk('public')->exists($permohonan->file)) {
                Storage::disk('public')->delete($permohonan->file);
            }          
            $data['file'] = $request->file('file')->store('permohonan_files', 'public');
        }
        $permohonan->update($data);

        return redirect()->route('permohonaninformasi.index')->with('success', 'Permohonan informasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $permohonan = Permohonaninformasi::findOrFail($id);
        $permohonan->delete();

        return redirect()->route('pemohon.index')->with('success', 'Permohonan informasi berhasil dihapus.');
    }
}
