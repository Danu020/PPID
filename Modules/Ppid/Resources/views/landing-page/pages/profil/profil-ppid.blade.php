@extends('ppid::landing-page.app')

@section('title', 'Profil - Profil PPID')

@section('content')
    <!-- Header Section -->
    <section class="py-20" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #0066a3 100%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Profil PPID
            </h1>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="text-left max-w-3xl mx-auto mb-12">
            <h4 class="text-2xl font-bold text-gray-800 mb-6 text-center">Profil PPID</h4>
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                {!! $profil->ppid !!}
            </div>
        </div>

        <div class="text-left max-w-3xl mx-auto mb-12">
            <h4 class="text-2xl font-bold text-gray-800 mb-6 text-center">Struktur Organisasi</h4>
            <img src="{{ asset('storage/' . $profil->foto_organisasi) }}" alt="Foto Direktur"
                class="w-180 h-96 object-cover rounded-lg mx-auto shadow-lg">
        </div>

        <div class="text-left max-w-3xl mx-auto">
            <h4 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tugas & Fungsi</h4>
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                {!! $profil->tugas_fungsi !!}
            </div>
        </div>
    </section>
@endsection

