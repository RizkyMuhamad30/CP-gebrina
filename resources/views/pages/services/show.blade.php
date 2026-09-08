@extends('layouts.app')

@section('title', $service->name . ' - CV GEBRINA JAYA Jabodetabek')
@section('meta_description', $service->short_description)

@section('content')

<!-- BREADCRUMB HEADER -->
<section class="bg-slate-900 text-white py-12 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <nav class="flex text-xs text-slate-400 space-x-2 mb-4">
            <a href="{{ route('home') }}" class="hover:text-amber-400">Beranda</a>
            <span>/</span>
            <a href="{{ route('services.index') }}" class="hover:text-amber-400">Layanan</a>
            <span>/</span>
            <span class="text-amber-400 font-semibold">{{ $service->name }}</span>
        </nav>

        <div>
            <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">{{ $service->name }}</h1>
            <p class="text-slate-300 text-sm sm:text-base mt-2 max-w-3xl">
                {{ $service->short_description }}
            </p>
        </div>

    </div>
</section>

<!-- MAIN CONTENT & SIDEBAR -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Main Content -->
            <div class="lg:col-span-8 space-y-8">
                
                <div class="rounded-2xl overflow-hidden shadow-xl border border-slate-200">
                    <img src="{{ asset($service->image_path ?? 'images/services/service-sedot-wc.jpg') }}" alt="{{ $service->name }}" class="w-full h-[360px] sm:h-[450px] object-cover">
                </div>

                <div class="prose prose-slate max-w-none space-y-4">
                    <h2 class="text-2xl font-bold text-slate-900">Deskripsi & Detail Pekerjaan</h2>
                    <div class="text-slate-700 leading-relaxed whitespace-pre-line text-base">
                        {{ $service->description }}
                    </div>
                </div>

                @if(!empty($service->features))
                    <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 space-y-4">
                        <h3 class="text-xl font-bold text-slate-900">Keunggulan Layanan Ini:</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            @foreach($service->features as $feature)
                                <div class="flex items-start space-x-3 bg-white p-3.5 rounded-xl border border-slate-200 shadow-sm">
                                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span class="text-sm font-semibold text-slate-800">{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Direct Action Banner -->
                <div class="bg-gradient-to-r from-blue-900 to-slate-900 rounded-2xl p-8 text-white space-y-4 shadow-xl">
                    <h3 class="text-2xl font-extrabold">Butuh Penanganan {{ $service->name }} Sekarang?</h3>
                    <p class="text-sm text-slate-300">
                        Tim CV GEBRINA JAYA siap meluncur ke lokasi Anda 24 Jam Nonstop dengan armada tangki vakum bersih dan garansi kepuasan.
                    </p>
                    <div class="pt-2 flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode('Halo CV GEBRINA JAYA, saya bermaksud memesan layanan: ' . $service->name) }}" target="_blank" class="px-6 py-3.5 bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold rounded-xl shadow-lg flex items-center justify-center space-x-2 text-sm">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                            <span>Pesan via WhatsApp Direct</span>
                        </a>
                        <a href="tel:{{ config('company.contact.phone_raw') }}" class="px-6 py-3.5 bg-slate-800 hover:bg-slate-700 text-white font-bold rounded-xl border border-slate-700 text-center text-sm">
                            Telepon: {{ config('company.contact.phone_display') }}
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar -->
            <div class="lg:col-span-4 space-y-8">
                
                <!-- Other Services Navigation -->
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 space-y-4">
                    <h3 class="text-lg font-bold text-slate-900 border-b border-slate-200 pb-3">Layanan Lainnya</h3>
                    <ul class="space-y-2">
                        @foreach($otherServices as $other)
                            <li>
                                <a href="{{ route('services.show', $other->slug) }}" class="block p-3 rounded-xl hover:bg-blue-600 hover:text-white transition-colors bg-white border border-slate-200 text-sm font-semibold text-slate-800 flex items-center justify-between">
                                    <span>{{ $other->name }}</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Emergency Contact Card -->
                <div class="bg-amber-500 text-slate-950 p-6 rounded-2xl shadow-lg space-y-3">
                    <span class="text-xs uppercase font-extrabold tracking-wider bg-slate-900 text-amber-400 px-2 py-0.5 rounded">Respon Cepat</span>
                    <h4 class="text-xl font-extrabold">Telepon Panggilan Darurat</h4>
                    <p class="text-xs font-medium text-slate-900 leading-relaxed">
                        Armada kami selalu dalam kondisi mesin hidup & siap dipanggil sewaktu-waktu ke lokasi Anda.
                    </p>
                    <a href="tel:{{ config('company.contact.phone_raw') }}" class="block w-full text-center py-3 bg-slate-900 hover:bg-slate-950 text-white font-extrabold rounded-xl text-sm transition-colors">
                        {{ config('company.contact.phone_display') }}
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
