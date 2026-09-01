@extends('layouts.app')

@section('title', 'Tentang Kami - CV GEBRINA JAYA | Profil & Legalitas Usaha')
@section('meta_description', 'Profil lengkap CV GEBRINA JAYA, penyedia jasa sedot WC & sanitasi profesional terpercaya di Jabodetabek sejak 2011 dengan NIB dan izin resmi pembuangan limbah LH.')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-slate-900 text-white py-16 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-extrabold text-amber-400 uppercase tracking-widest">Profil Perusahaan</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Tentang CV GEBRINA JAYA</h1>
        <p class="text-slate-300 max-w-2xl mx-auto text-sm sm:text-base">
            Mitra terpercaya masyarakat Jabodetabek dalam penanganan sanitasi, pengurasan septic tank, dan pengolahan limbah cair sejak lebih dari 15 tahun.
        </p>
    </div>
</section>

<!-- COMPANY STORY & HISTORY -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                    Dedikasi & Pengalaman Puluhan Tahun Dalam Jasa Sanitasi
                </h2>
                <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                    <strong>CV GEBRINA JAYA</strong> didirikan dengan komitmen murni untuk mengatasi permasalahan sanitasi masyarakat perkotaan Jabodetabek yang kian berkembang pesat. Berawal dari 2 unit armada truk sederhana, kini kami berkembang menjadi penyedia jasa spesialis dengan puluhan unit truk tangki vakum berkapasitas besar dan teknisi berpengalaman.
                </p>
                <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                    Kami memprioritaskan metode kerja yang higienis, ramah lingkungan, cepat tanggap, dan tanpa biaya tersembunyi. Seluruh limbah yang ditarik dibuang secara legal ke Tempat Pembuangan Limbah Resmi (IPLT) milik pemerintah daerah.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-200">
                        <div class="text-2xl font-extrabold text-blue-600">15+ Tahun</div>
                        <div class="text-xs font-semibold text-slate-600">Pengalaman Lapangan</div>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-200">
                        <div class="text-2xl font-extrabold text-emerald-600">12.500+</div>
                        <div class="text-xs font-semibold text-slate-600">Pelanggan Puas</div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-slate-100">
                    <img src="{{ asset('images/gallery/tim-teknisi-1.jpg') }}" alt="Tim Teknisi CV GEBRINA JAYA" class="w-full h-[400px] object-cover">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- VISION & MISSION -->
<section class="py-16 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 space-y-4">
                <div class="w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center font-bold text-xl">
                    V
                </div>
                <h3 class="text-2xl font-bold text-slate-900">Visi Kami</h3>
                <p class="text-slate-600 leading-relaxed text-sm">
                    Menjadi perusahaan penyedia jasa sanitasi dan pengolahan limbah cair terdepan, paling tepercaya, dan ramah lingkungan di seluruh wilayah Jabodetabek dengan standar layanan internasional.
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 space-y-4">
                <div class="w-12 h-12 rounded-xl bg-amber-500 text-slate-950 flex items-center justify-center font-bold text-xl">
                    M
                </div>
                <h3 class="text-2xl font-bold text-slate-900">Misi Perusahaan</h3>
                <ul class="space-y-2 text-slate-600 text-sm list-disc list-inside">
                    <li>Memberikan respon darurat 24 jam yang cepat dan tepat waktu ke lokasi pelanggan.</li>
                    <li>Menggunakan peralatan teknologis modern seperti mesin roto-cleaner & vakum high-pressure.</li>
                    <li>Menjaga transparansi harga tanpa ada biaya tambahan terselubung.</li>
                    <li>Memastikan pembuangan limbah secara legal dan bertanggung jawab demi kelestarian lingkungan.</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- LEGALITIES & PROOF OF QUALITY -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-slate-900 rounded-3xl p-8 sm:p-12 text-white shadow-2xl relative overflow-hidden">
            <div class="relative z-10 max-w-3xl space-y-6">
                <span class="text-xs font-extrabold text-amber-400 uppercase tracking-widest">Aspek Legalitas & Keamanan</span>
                <h2 class="text-2xl sm:text-4xl font-extrabold text-white">Usaha Resmi & Memiliki Izin Lingkungan</h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Anda tenang bekerja dengan perusahaan yang sah secara hukum. CV GEBRINA JAYA terdaftar resmi dan mematuhi aturan kelestarian lingkungan hidup Pemda DKI Jakarta & Jawa Barat.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4">
                    <div class="p-4 bg-slate-800/80 rounded-xl border border-slate-700 space-y-1">
                        <div class="text-xs text-amber-400 font-bold uppercase">Nomor Induk Berusaha</div>
                        <div class="text-sm font-extrabold text-white">{{ config('company.legalities.nib') }}</div>
                    </div>
                    <div class="p-4 bg-slate-800/80 rounded-xl border border-slate-700 space-y-1">
                        <div class="text-xs text-emerald-400 font-bold uppercase">Izin Pembuangan Limbah</div>
                        <div class="text-sm font-extrabold text-white">{{ config('company.legalities.izin_lh') }}</div>
                    </div>
                </div>

                <div class="pt-4">
                    <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}" target="_blank" class="inline-flex items-center space-x-2 px-6 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-sm transition-colors">
                        <span>Hubungi Perusahaan</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
