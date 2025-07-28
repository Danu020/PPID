<?php

namespace Modules\Ppid\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Ppid\Entities\Berita;
use Modules\Ppid\Entities\Datadokumen;
use Modules\Ppid\Entities\DataInformasi;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('ppid::landing-page.pages.beranda');
    }

    public function beritaIndex(Request $request)
    {
        $page = $request->get('page', 1);
        $perPage = 6;
        $offset = ($page - 1) * $perPage;

        $news = DB::select("SELECT * FROM berita LIMIT ? OFFSET ?", [$perPage, $offset]);
        $totalRows = DB::selectOne("SELECT COUNT(*) as total FROM berita");
        $totalNews = $totalRows->total;

        return view('ppid::landing-page.pages.publikasi.berita.index', [
            'news' => $news,
            'current_page' => $page,
            'last_page' => ceil($totalNews / $perPage),
            'per_page' => $perPage,
            'total' => $totalNews
        ]);
    }

    public function beritaDetail($id)
    {
        $berita = Berita::findOrFail($id);
        return view('ppid::landing-page.pages.publikasi.berita.detail', compact('berita'));
    }

    public function pengumumanIndex() {}

    public function pengumumanDetail($id) {}

    public function informasiSetiapSaatIndex()
    {
        $datainformasi = DataInformasi::with('jenisInformasi')
            ->whereHas('jenisInformasi', function ($query) {
                $query->where('jenis_informasi', 'Informasi Setiap Saat');
            })
            ->get();
        return view('ppid::landing-page.pages.informasi-publik.informasi-setiap-saat', compact('datainformasi'));
    }

    public function informasiBerkalaIndex()
    {
        $datainformasi = DataInformasi::with('jenisInformasi')
            ->whereHas('jenisInformasi', function ($query) {
                $query->where('jenis_informasi', 'Informasi Berkala');
            })
            ->get();
        return view('ppid::landing-page.pages.informasi-publik.informasi-berkala', compact('datainformasi'));
    }


    public function informasiSertaMertaIndex()
    {
        $datainformasi = DataInformasi::with('jenisInformasi')
            ->whereHas('jenisInformasi', function ($query) {
                $query->where('jenis_informasi', 'Informasi Serta-merta');
            })
            ->get();
        return view('ppid::landing-page.pages.informasi-publik.informasi-serta-merta', compact('datainformasi'));
    }

    public function informasiDikecualikanIndex()
    {
        $dataDokumen = Datadokumen::with('jenisDokumens')
            ->whereHas('jenisDokumens', function ($query) {
                $query->where('jenis_dokumen', 'Informasi Yang Dikecualikan');
            })
            ->get();
        return view('ppid::landing-page.pages.informasi-publik.informasi-dikecualikan', compact('dataDokumen'));
    }

    public function regulasiIndex()
    {
        $dataDokumen = Datadokumen::with('jenisDokumens')
            ->whereHas('jenisDokumens', function ($query) {
                $query->where('jenis_dokumen', 'Regulasi');
            })
            ->get();
        return view('ppid::landing-page.pages.informasi-publik.regulasi', compact('dataDokumen'));
    }

    public function informasiPublikIndex()
    {
        $dataDokumen = Datadokumen::with('jenisDokumens')
            ->whereHas('jenisDokumens', function ($query) {
                $query->where('jenis_dokumen', 'Daftar Informasi Publik');
            })
            ->get();
        return view('ppid::landing-page.pages.informasi-publik.informasi-publik', compact('dataDokumen'));
    }

    public function maklumatPelayananIndex()
    {
        $dataDokumen = Datadokumen::with('jenisDokumens')
            ->whereHas('jenisDokumens', function ($query) {
                $query->where('jenis_dokumen', 'Maklumat Pelayanan');
            })
            ->get();
        return view('ppid::landing-page.pages.layanan-informasi.maklumat-layanan', compact('dataDokumen'));
    }

    public function standarPelayananIndex()
    {
        $dataDokumen = Datadokumen::with('jenisDokumens')
            ->whereHas('jenisDokumens', function ($query) {
                $query->where('jenis_dokumen', 'Standar Layanan');
            })
            ->get();
        return view('ppid::landing-page.pages.layanan-informasi.standar-layanan', compact('dataDokumen'));
    }

    public function prosedurPermohonanInformasiIndex()
    {
        $dataDokumen = Datadokumen::with('jenisDokumens')
            ->whereHas('jenisDokumens', function ($query) {
                $query->where('jenis_dokumen', 'Prosedur Pengajuan Permohonan Informasi');
            })
            ->get();
        return view('ppid::landing-page.pages.layanan-informasi.permohonan-informasi', compact('dataDokumen'));
    }

    public function prosedurKeberatanInformasiIndex()
    {
        $dataDokumen = Datadokumen::with('jenisDokumens')
            ->whereHas('jenisDokumens', function ($query) {
                $query->where('jenis_dokumen', 'Prosedur Pengajuan Keberatan Informasi');
            })
            ->get();
        return view('ppid::landing-page.pages.layanan-informasi.keberatan-informasi', compact('dataDokumen'));
    }

    public function prosedurPenyelesaianSengketaIndex()
    {
        $dataDokumen = Datadokumen::with('jenisDokumens')
            ->whereHas('jenisDokumens', function ($query) {
                $query->where('jenis_dokumen', 'Prosedur Penyelesaian Sengketa');
            })
            ->get();
        return view('ppid::landing-page.pages.layanan-informasi.penyelesaian-sengketa', compact('dataDokumen'));
    }
}