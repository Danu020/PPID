@extends('ppid::landing-page.app')

@section('title', 'Profil - Sambutan Direktur')

@section('content')
    <!-- Header Section -->
    <section class="py-20" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #0066a3 100%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Sambutan Direktur
            </h1>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <div class="mb-8">
                <img src="{{ asset('storage/' . $profil->media) }}" alt="Foto Direktur"
                    class="w-180 h-96 object-cover rounded-lg mx-auto shadow-lg">
                <h2 class="text-sm md:text-md mt-4 italic font-bold text-gray-800">
                    {{ $profil->nama_direktur ?? 'Nama Direktur' }}
                </h2>
            </div>

            <div class="text-left max-w-3xl mx-auto">
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    {!! $profil->sambutan !!}
                </div>
            </div>
        </div>
    </section>
@endsection