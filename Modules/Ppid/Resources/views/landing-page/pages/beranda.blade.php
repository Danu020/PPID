@extends('ppid::landing-page.app')

@section('title', 'Beranda - PPID Poliwangi')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden"
        style="background: linear-gradient(135deg, var(--primary-blue) 0%, #0066a3 100%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Portal Pengelolaan
                        <span class="block" style="color: var(--primary-yellow);">Informasi dan</span>
                        Dokumentasi
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 mb-8 leading-relaxed">
                        Portal Pengelola Informasi dan Dokumentasi Politeknik Negeri Banyuwangi
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        {{-- <a href="{{ route('profil') }}"
                            class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 hover:shadow-lg"
                            style="background-color: var(--primary-yellow); color: var(--primary-blue);">
                            Pelajari Lebih Lanjut
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a> --}}
                        {{-- <a href="{{ route('download') }}"
                            class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white border-2 border-white rounded-lg hover:bg-white transition-all duration-200 transform hover:scale-105"
                            style="hover:color: var(--primary-blue);">
                            Download Dokumen
                            <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </a> --}}
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="w-full h-96 bg-white bg-opacity-10 rounded-2xl backdrop-blur-sm flex items-center justify-center">
                        <div class="text-center text-white">
                            {{-- <div class="w-24 h-24 mx-auto mb-4 rounded-full flex items-center justify-center text-3xl font-bold"
                                style="background-color: var(--primary-yellow); color: var(--primary-blue);">
                                MoU
                            </div> --}}
                            <p class="text-lg">Campus Partnership Hub</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Summary Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-blue);">
                    Fitur Unggulan
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{-- Kami adalah organisasi yang berdedikasi untuk memfasilitasi dan mengelola kerjasama strategis antara
                    kampus dengan berbagai institusi, baik dalam negeri maupun luar negeri. --}}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-gray-50 rounded-xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-white text-2xl font-bold"
                        style="background-color: var(--primary-blue);">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4" style="color: var(--primary-blue);">Informasi Setiap Saat</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aut, incidunt consequatur fuga
                        nihil iusto officia dolorem perferendis quasi nam possimus eius doloremque libero. Reiciendis iure
                        nemo alias magni beatae!
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-50 rounded-xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-2xl font-bold"
                        style="background-color: var(--primary-yellow); color: var(--primary-blue);">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4" style="color: var(--primary-blue);">Informasi Berkala</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aut, incidunt consequatur fuga
                        nihil iusto officia dolorem perferendis quasi nam possimus eius doloremque libero. Reiciendis iure
                        nemo alias magni beatae!
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-gray-50 rounded-xl p-8 text-center hover:shadow-lg transition-shadow duration-300">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-white text-2xl font-bold"
                        style="background-color: var(--primary-blue);">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4" style="color: var(--primary-blue);">Informasi Serta Merta</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam aut, incidunt consequatur fuga
                        nihil iusto officia dolorem perferendis quasi nam possimus eius doloremque libero. Reiciendis iure
                        nemo alias magni beatae!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-20" style="background-color: var(--primary-blue);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Statistik
                </h2>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">
                    Rekapitulasi Permohonan Inforamsi Publik
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold mb-2" style="color: var(--primary-yellow);">150+</div>
                    <div class="text-blue-100 text-lg">Permohonan Diajukan</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold mb-2" style="color: var(--primary-yellow);">100+</div>
                    <div class="text-blue-100 text-lg">Permohonan Diterima</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl md:text-5xl font-bold mb-2" style="color: var(--primary-yellow);">50+</div>
                    <div class="text-blue-100 text-lg">Permohonan Ditolak</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-blue);">
                Berita
            </h2>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis, alias natus, at ipsa, libero
                voluptatibus dolorum quasi expedita numquam quae consequuntur veniam pariatur totam. Odio molestiae impedit
                atque non?
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                {{-- <a href="{{ route('download') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg transition-all duration-200 transform hover:scale-105 hover:shadow-lg"
                    style="background-color: var(--primary-blue);">
                    Download Panduan MoU
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </a> --}}
                {{-- <a href="https://mail.google.com/mail/?view=cm&fs=1&to=humas@poliwangi.ac.id"
                    class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 rounded-lg transition-all duration-200 transform hover:scale-105"
                    style="color: var(--primary-blue); border-color: var(--primary-blue); hover:background-color: var(--primary-blue); hover:color: white;">
                    Hubungi Kami
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a> --}}
            </div>
        </div>
    </section>

    {{-- Pengumuman Section --}}
    <section class="py-20 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-blue);">
                Pengumuman
            </h2>
            <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis, alias natus, at ipsa, libero
                voluptatibus dolorum quasi expedita numquam quae consequuntur veniam pariatur totam. Odio molestiae impedit
                atque non?
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                {{-- <a href="{{ route('download') }}"
                    class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg transition-all duration-200 transform hover:scale-105 hover:shadow-lg"
                    style="background-color: var(--primary-blue);">
                    Download Panduan MoU
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </a> --}}
                {{-- <a href="https://mail.google.com/mail/?view=cm&fs=1&to=humas@poliwangi.ac.id"
                    class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 rounded-lg transition-all duration-200 transform hover:scale-105"
                    style="color: var(--primary-blue); border-color: var(--primary-blue); hover:background-color: var(--primary-blue); hover:color: white;">
                    Hubungi Kami
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a> --}}
            </div>
        </div>
    </section>
@endsection
