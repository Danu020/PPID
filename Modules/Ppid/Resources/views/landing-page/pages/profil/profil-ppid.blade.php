@extends('landing-page.app')

@section('title', 'Profil - Campus MoU Organization')

@section('content')
    <!-- Header Section -->
    <section class="py-20" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #0066a3 100%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Profil Organisasi
            </h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Mengenal lebih dalam tentang visi, misi, dan struktur organisasi MoU Kampus yang berkomitmen membangun
                kemitraan strategis.
            </p>
        </div>
    </section>

    <!-- Visi & Misi Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Visi -->
                <div class="bg-gray-50 rounded-2xl p-8 lg:p-12">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4"
                            style="background-color: var(--primary-blue);">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold" style="color: var(--primary-blue);">Visi</h2>
                    </div>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        {!! $profil->visi !!}
                    </p>
                </div>

                <!-- Misi -->
                <div class="bg-gray-50 rounded-2xl p-8 lg:p-12">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl mr-4"
                            style="background-color: var(--primary-yellow); color: var(--primary-blue);">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold" style="color: var(--primary-blue);">Misi</h2>
                    </div>
                    <ul class="space-y-4 text-lg text-gray-700">
                        {{-- {!! $profil->misi !!} --}}
                        <li class="flex items-start">
                            <div class="w-2 h-2 rounded-full mt-3 mr-3 flex-shrink-0"
                                style="background-color: var(--primary-yellow);"></div>
                            <span>Menjalin dan menjaga hubungan kerjasama yang baik dengan berbagai pihak baik di dalam
                                maupun di luar negeri.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-2 h-2 rounded-full mt-3 mr-3 flex-shrink-0"
                                style="background-color: var(--primary-yellow);"></div>
                            <span>Kreatif dan inovatif untuk mengangkat citra baik Politeknik Negeri Banyuwangi.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-2 h-2 rounded-full mt-3 mr-3 flex-shrink-0"
                                style="background-color: var(--primary-yellow);"></div>
                            <span>Proaktif untuk memperluas jejaring kerjasama dengan berbagai pihak.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-2 h-2 rounded-full mt-3 mr-3 flex-shrink-0"
                                style="background-color: var(--primary-yellow);"></div>
                            <span>Membangun dan mengembangkan potensi sumberdaya yang dimiliki Politeknik Negeri Banyuwangi
                                melalui kerjasama dengan berbagai pihak baik di luar negeri dan di dalam negeri.</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-2 h-2 rounded-full mt-3 mr-3 flex-shrink-0"
                                style="background-color: var(--primary-yellow);"></div>
                            <span>Melakukan kegiatan kerjasama dengan jujur, berintegritas, efisien serta akuntabel.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-blue);">
                    Struktur Organisasi
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Tim profesional yang berpengalaman dalam mengelola kerjasama strategis dan memfasilitasi pembentukan MoU
                    berkualitas.
                </p>
            </div>

            <!-- Organizational Chart Placeholder -->
            <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-12 mb-12">
                <div
                    class="flex items-center justify-center h-128 bg-gray-100 rounded-xl border-2 border-dashed border-gray-300">
                    <div class="text-center">
                        {{-- <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center text-white font-bold text-2xl"
                            style="background-color: var(--primary-blue);">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div> --}}
                        {{-- <h3 class="text-xl font-semibold mb-2" style="color: var(--primary-blue);">Bagan Struktur Organisasi --}}
                        </h3>
                        <img src="{{ asset("storage/". $profil->foto) }}" alt="Foto Struktur Organisasi">
                        {{-- <p class="text-gray-600">Gambar struktur organisasi akan ditempatkan di sini</p>
                        <p class="text-sm text-gray-500 mt-2">Dimensi yang disarankan: 800x600 pixels</p> --}}
                    </div>
                </div>
            </div>

            <!-- Key Personnel -->
            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Director -->
                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-20 h-20 mx-auto mb-4 rounded-full flex items-center justify-center text-white font-bold text-2xl"
                        style="background-color: var(--primary-blue);">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2" style="color: var(--primary-blue);">Direktur</h3>
                    <p class="text-gray-600 mb-4">Memimpin dan mengkoordinasikan seluruh kegiatan organisasi MoU</p>
                    <div class="text-sm text-gray-500">
                        <p>• Perencanaan strategis</p>
                        <p>• Pengambilan keputusan</p>
                        <p>• Hubungan eksternal</p>
                    </div>
                </div>

                <!-- Manager -->
                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-20 h-20 mx-auto mb-4 rounded-full flex items-center justify-center font-bold text-2xl"
                        style="background-color: var(--primary-yellow); color: var(--primary-blue);">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2" style="color: var(--primary-blue);">Manajer Operasional</h3>
                    <p class="text-gray-600 mb-4">Mengelola operasional harian dan koordinasi program</p>
                    <div class="text-sm text-gray-500">
                        <p>• Manajemen proyek</p>
                        <p>• Koordinasi tim</p>
                        <p>• Monitoring & evaluasi</p>
                    </div>
                </div>

                <!-- Coordinator -->
                <div class="bg-white rounded-xl p-6 text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-20 h-20 mx-auto mb-4 rounded-full flex items-center justify-center text-white font-bold text-2xl"
                        style="background-color: var(--primary-blue);">
                        <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2" style="color: var(--primary-blue);">Koordinator Kemitraan</h3>
                    <p class="text-gray-600 mb-4">Memfasilitasi hubungan dengan mitra dan stakeholder</p>
                    <div class="text-sm text-gray-500">
                        <p>• Komunikasi mitra</p>
                        <p>• Negosiasi MoU</p>
                        <p>• Relationship management</p>
                    </div>
                </div>
            </div> --}}
        </div>

    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6" style="color: var(--primary-blue);">
                    Nilai-Nilai Organisasi
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Prinsip-prinsip yang menjadi landasan dalam setiap kegiatan dan kerjasama yang kami lakukan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-white font-bold text-2xl"
                        style="background-color: var(--primary-blue);">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4" style="color: var(--primary-blue);">Integritas</h3>
                    <p class="text-gray-600">
                        Berkomitmen pada transparansi dan kejujuran dalam setiap proses kerjasama.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center font-bold text-2xl"
                        style="background-color: var(--primary-yellow); color: var(--primary-blue);">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4" style="color: var(--primary-blue);">Efisiensi</h3>
                    <p class="text-gray-600">
                        Mengoptimalkan proses dan sumber daya untuk hasil yang maksimal.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center text-white font-bold text-2xl"
                        style="background-color: var(--primary-blue);">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4" style="color: var(--primary-blue);">Kolaborasi</h3>
                    <p class="text-gray-600">
                        Membangun kemitraan yang saling menguntungkan dan berkelanjutan.
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-6 rounded-full flex items-center justify-center font-bold text-2xl"
                        style="background-color: var(--primary-yellow); color: var(--primary-blue);">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4" style="color: var(--primary-blue);">Inovasi</h3>
                    <p class="text-gray-600">
                        Terus mengembangkan pendekatan baru untuk meningkatkan kualitas kerjasama.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
