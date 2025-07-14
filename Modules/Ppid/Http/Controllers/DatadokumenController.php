<?php
namespace Modules\Ppid\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Ppid\Entities\Datadokumen;
use Modules\Ppid\Entities\JenisDokumen;

class DatadokumenController extends Controller
{
    // Tampilkan semua data dokumen
    public function index()
    {
        $datadokumen = Datadokumen::with('jenisDokumens')->get();
        return view('ppid::datadokumen.index', compact('datadokumen'));
    }

    // Form tambah data dokumen
    public function create()
    {
        $jenis_dokumens = JenisDokumen::all();
        return view('ppid::datadokumen.create', compact('jenis_dokumens'));
    }

    // Simpan data dokumen baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_dokumen' => 'required|string|max:255',
            'tahun' => 'nullable|date',
            'jenis_dokumens_id' => 'required|exists:jenis_dokumens,id',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png',
        ]);

        $data = $request->except('file');
        if ($request->hasFile('file')) {
            $data['file_path'] = $request->file('file')->store('dokumen', 'public');
        }
        Datadokumen::create($data);
        return redirect()->route('datadokumen.index')->with('success', 'Data dokumen berhasil ditambahkan.');
    }

    // Form edit data dokumen
    public function edit($id)
    {
        $datadokumen = Datadokumen::findOrFail($id);
        $jenis_dokumen = JenisDokumen::all();
        return view('ppid::datadokumen.edit', compact('datadokumen', 'jenis_dokumen'));
    }

    // Update data dokumen
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dokumen' => 'required|string|max:255',
            'tahun' => 'nullable|date',
            'jenis_dokumen_id' => 'required|exists:jenis_dokumen,id',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png',
        ]);
        $datadokumen = Datadokumen::findOrFail($id);
        $data = $request->except('file');
        if ($request->hasFile('file')) {
            $data['file_path'] = $request->file('file')->store('dokumen', 'public');
        }
        $datadokumen->update($data);
        return redirect()->route('datadokumen.index')->with('success', 'Data dokumen berhasil diperbarui.');
    }

    // Hapus data dokumen
    public function destroy($id)
    {
        $datadokumen = Datadokumen::findOrFail($id);
        $datadokumen->delete();
        return redirect()->route('datadokumen.index')->with('success', 'Data dokumen berhasil dihapus.');
    }
}
