@extends('layouts.app')

@section('title', 'Wilayah Layanan Sedot WC Jabodetabek - CV GEBRINA JAYA')
@section('meta_description', 'Jangkauan wilayah layanan CV GEBRINA JAYA di seluruh kawasan Jabodetabek: Jakarta, Bogor, Depok, Tangerang, dan Bekasi. Melayani 24 Jam Nonstop dengan armada tangki terdekat.')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-slate-900 text-white py-16 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-extrabold text-amber-400 uppercase tracking-widest">Cakupan Jangkauan Armada</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Wilayah Layanan Jabodetabek</h1>
        <p class="text-slate-300 max-w-2xl mx-auto text-sm sm:text-base">
            Pos armada truk vakum kami tersebar di seluruh kawasan Jabodetabek untuk memberikan respon cepat dan sigap ke lokasi Anda.
        </p>
    </div>
</section>

<!-- JABODETABEK REGIONS BREAKDOWN -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach(['Jakarta', 'Bogor', 'Depok', 'Tangerang', 'Bekasi'] as $region)
                <div class="bg-white rounded-2xl p-6 shadow-md border border-slate-200 space-y-4 hover:shadow-xl transition-shadow">
                    <div class="flex items-center space-x-3 pb-3 border-b border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center font-bold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-extrabold text-slate-900">Area {{ $region }}</h2>
                            <span class="text-xs text-emerald-600 font-semibold flex items-center space-x-1 mt-0.5">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                <span>Jabodetabek Coverage</span>
                            </span>
                        </div>
                    </div>

                    <p class="text-xs text-slate-600 leading-relaxed">
                        Layanan sedot WC, pengurasan septic tank, dan pelancaran saluran mampet 24 Jam Nonstop untuk seluruh area {{ $region }}.
                    </p>

                    <div class="pt-2">
                        <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode('Halo CV GEBRINA JAYA, saya ingin panggil armada sedot WC untuk area ' . $region) }}" target="_blank" class="w-full py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-xs flex items-center justify-center space-x-2 transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                            <span>Panggil Armada {{ $region }}</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- GOOGLE MAP EMBED SECTION -->
<section class="py-16 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <h2 class="text-xs font-extrabold text-blue-600 uppercase tracking-widest">Peta Operasional</h2>
            <h3 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Cakupan Wilayah Jabodetabek</h3>
            <p class="text-sm text-slate-600">Kantor pusat kami berlokasi di Jakarta Timur, dengan pos armada pendukung yang siaga di seluruh Jabodetabek.</p>
        </div>

        <div class="rounded-3xl overflow-hidden shadow-2xl border-4 border-slate-100 h-[450px]">
            <iframe src="{{ config('company.contact.google_maps_embed') }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

@endsection
