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
        $request->validate([
            'nama_informasi' => 'required|string|max:255',
            'jenis_informasi_id' => 'required|exists:jenis_informasis,id',
            'jenis' => 'required|in:Link,Dokumen',
            'link' => 'required_if:jenis,Link|nullable|url',
            'dokumen' => 'required_if:jenis,Dokumen|nullable|mimes:pdf|max:2048',
        ]);

        $finalLink = null;

        if ($request->jenis === 'Dokumen' && $request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/dokumen', $filename);
            $finalLink = 'storage/dokumen/' . $filename;
        } elseif ($request->jenis === 'Link') {
            $finalLink = $request->link;
        }

        DataInformasi::create([
            'nama_informasi' => $request->nama_informasi,
            'jenis_informasi_id' => $request->jenis_informasi_id,
            'jenis' => $request->jenis,
            'link' => $finalLink,
        ]);

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

        $request->validate([
            'nama_informasi' => 'required|string|max:255',
            'jenis_informasi_id' => 'required|exists:jenis_informasis,id',
            'jenis' => 'required|in:Link,Dokumen',
            'link' => 'required_if:jenis,Link|nullable|url',
            'dokumen' => 'required_if:jenis,Dokumen|nullable|mimes:pdf|max:2048',
        ]);

        $finalLink = $data_informasi->link;

        if ($request->jenis === 'Dokumen' && $request->hasFile('dokumen')) {
            // Hapus dokumen lama jika ada
            if ($data_informasi->jenis === 'Dokumen' && $data_informasi->link && file_exists(public_path($data_informasi->link))) {
                unlink(public_path($data_informasi->link));
            }

            $file = $request->file('dokumen');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/dokumen', $filename);
            $finalLink = 'storage/dokumen/' . $filename;
        } elseif ($request->jenis === 'Link') {
            // Hapus file jika sebelumnya adalah dokumen
            if ($data_informasi->jenis === 'Dokumen' && $data_informasi->link && file_exists(public_path($data_informasi->link))) {
                unlink(public_path($data_informasi->link));
            }

            $finalLink = $request->link;
        }

        $data_informasi->update([
            'nama_informasi' => $request->nama_informasi,
            'jenis_informasi_id' => $request->jenis_informasi_id,
            'jenis' => $request->jenis,
            'link' => $finalLink,
        ]);

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

        // Hapus file jika datanya bertipe Dokumen
        if ($data_informasi->jenis === 'Dokumen' && $data_informasi->link && file_exists(public_path($data_informasi->link))) {
            unlink(public_path($data_informasi->link));
        }

        $data_informasi->delete();
        return redirect()->route('datainformasi.index')->with('success', 'Data Informasi berhasil dihapus.');
    }
}
