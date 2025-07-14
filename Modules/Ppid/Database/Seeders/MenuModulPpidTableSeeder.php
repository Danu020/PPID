<?php

namespace Modules\Ppid\Database\Seeders;

use App\Models\Core\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MenuModulPpidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Menu::where('modul', 'Ppid')->delete();
        $menu =  Menu::create([
            'modul' => 'Ppid',
            'label' => 'Kelola Profil',
            'url' => 'ppid/kelola-profil',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'fas fa-clipboard',
            'urut' => 1,
            'parent_id' => 0,
            'active' => serialize(['ppid/kelola-profil', 'ppid/kelola-profil*']),
        ]);
        // Menu::create([
        //     'modul' => 'Ppid',
        //     'label' => 'Sambutan Direktur',
        //     'url' => 'ppid/sambutan-direktur',
        //     // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
        //     'can' => serialize(['admin']),
        //     'icon' => 'far fa-circle',
        //     'urut' => 1,
        //     'parent_id' => $menu->id,
        //     'active' => serialize(['ppid/sambutan-direktur', 'ppid/sambutan-direktur*']),]);

        // Menu::create([
        //     'modul' => 'Ppid',
        //     'label' => 'Profil PPID',
        //     'url' => 'ppid/profil-ppid',
        //     // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
        //     'can' => serialize(['admin']),
        //     'icon' => 'far fa-circle',
        //     'urut' => 1,
        //     'parent_id' => $menu->id,
        //     'active' => serialize(['ppid/profil-ppid', 'ppid/profil-ppid*']),]);

        // Menu::create([
        //     'modul' => 'Ppid',
        //     'label' => 'Struktur Organisasi',
        //     'url' => 'ppid/struktur-organisasi',
        //     // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
        //     'can' => serialize(['admin']),
        //     'icon' => 'far fa-circle',
        //     'urut' => 1,
        //     'parent_id' => $menu->id,
        //     'active' => serialize(['ppid/struktur-organisasi', 'ppid/struktur-organisasi*']),]);

        // Menu::create([
        //     'modul' => 'Ppid',
        //     'label' => 'Tugas dan Fungsi',
        //     'url' => 'ppid/tugas-dan-fungsi',
        //     // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
        //     'can' => serialize(['admin']),
        //     'icon' => 'far fa-circle',
        //     'urut' => 1,
        //     'parent_id' => $menu->id,
        //     'active' => serialize(['ppid/tugas-dan-fungsi', 'ppid/tugas-dan-fungsi*']),]);

        // Menu::create([
        //     'modul' => 'Ppid',
        //     'label' => 'Visi dan Misi',
        //     'url' => 'ppid/visi-dan-misi',
        //     // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
        //     'can' => serialize(['admin']),
        //     'icon' => 'far fa-circle',
        //     'urut' => 1,
        //     'parent_id' => $menu->id,
        //     'active' => serialize(['ppid/visi-dan-misi', 'ppid/visi-dan-misi*']),]);       
        // // $this->call("OthersTableSeeder");

        $menu =  Menu::create([
            'modul' => 'Ppid',
            'label' => 'Kelola Dokumen',
            'url' => 'ppid/kelola-dokumen',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'fas fa-clipboard',
            'urut' => 1,
            'parent_id' => 0,
            'active' => serialize(['ppid/kelola-dokumen', 'ppid/kelola-dokumen*']),
        ]);
        Menu::create([
            'modul' => 'Ppid',
            'label' => 'Jenis Dokumen',
            'url' => 'ppid/jenis-dokumen',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'far fa-circle',
            'urut' => 1,
            'parent_id' => $menu->id,
            'active' => serialize(['ppid/jenis-dokumen', 'ppid/jenis-dokumen*']),]);

        Menu::create([
            'modul' => 'Ppid',
            'label' => 'Data Dokumen',
            'url' => 'ppid/data-dokumen',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'far fa-circle',
            'urut' => 1,
            'parent_id' => $menu->id,
            'active' => serialize(['ppid/data-dokumen', 'ppid/data-dokumen*']),]);

        $menu =  Menu::create([
            'modul' => 'Ppid',
            'label' => 'Kelola Informasi',
            'url' => 'ppid/kelola-informasi',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'fas fa-clipboard',
            'urut' => 1,
            'parent_id' => 0,
            'active' => serialize(['ppid/kelola-informasi', 'ppid/kelola-informasi*']),
        ]);
        Menu::create([
            'modul' => 'Ppid',
            'label' => 'Jenis Informasi',
            'url' => 'ppid/jenis-informasi',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'far fa-circle',
            'urut' => 1,
            'parent_id' => $menu->id,
            'active' => serialize(['ppid/jenis-informasi', 'ppid/jenis-informasi*']),]);

        Menu::create([
            'modul' => 'Ppid',
            'label' => 'Data Informasi',
            'url' => 'ppid/data-informasi',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'far fa-circle',
            'urut' => 1,
            'parent_id' => $menu->id,
            'active' => serialize(['ppid/data-informasi', 'ppid/data-informasi*']),]);

        $menu =  Menu::create([
            'modul' => 'Ppid',
            'label' => 'Kelola Permohonan',
            'url' => 'ppid/kelola-permohonan',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'fas fa-clipboard',
            'urut' => 1,
            'parent_id' => 0,
            'active' => serialize(['ppid/kelola-permohonan', 'ppid/kelola-permohonan*']),
        ]);
        Menu::create([
            'modul' => 'Ppid',
            'label' => 'Jenis Permohonan',
            'url' => 'ppid/jenis-permohonan',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'far fa-circle',
            'urut' => 1,
            'parent_id' => $menu->id,
            'active' => serialize(['ppid/jenis-permohonan', 'ppid/jenis-permohonan*']),]);
        
        Menu::create([
            'modul' => 'Ppid',
            'label' => 'Data Pemohon',
            'url' => 'ppid/data-pemohon',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'far fa-circle',
            'urut' => 1,
            'parent_id' => $menu->id,
            'active' => serialize(['ppid/data-pemohon', 'ppid/data-pemohon*']),]);

        $menu =  Menu::create([
            'modul' => 'Ppid',
            'label' => 'Berita',
            'url' => 'ppid/berita',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'fas fa-clipboard',
            'urut' => 1,
            'parent_id' => 0,
            'active' => serialize(['ppid/berita', 'ppid/berita*']),
        ]);

        $menu =  Menu::create([
            'modul' => 'Ppid',
            'label' => 'Pengumuman',
            'url' => 'ppid/pengumuman',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'fas fa-clipboard',
            'urut' => 1,
            'parent_id' => 0,
            'active' => serialize(['ppid/pengumuman', 'ppid/pengumuman*']),
        ]);

        $menu =  Menu::create([
            'modul' => 'Ppid',
            'label' => 'Permohonan Informasi',
            'url' => 'ppid/pemohon',
            // 'can' => serialize(['pimpinan', 'pejabat', 'sekretaris', 'kepegawaian', 'dosen']),
            'can' => serialize(['admin']),
            'icon' => 'fas fa-clipboard',
            'urut' => 1,
            'parent_id' => 0,
            'active' => serialize(['ppid/pemohon', 'ppid/pemohon*']),
        ]);
    }
}