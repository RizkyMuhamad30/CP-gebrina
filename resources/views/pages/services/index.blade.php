@extends('layouts.app')

@section('title', 'Layanan Sedot WC & Septic Tank - CV GEBRINA JAYA')
@section('meta_description', 'Daftar lengkap layanan CV GEBRINA JAYA: Sedot WC Rumahan, Sedot WC Perkantoran, Pelancaran Saluran Mampet Tanpa Bongkar, Pembuatan Septic Tank Baru & Kuras Limbah Restoran.')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-slate-900 text-white py-16 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-extrabold text-amber-400 uppercase tracking-widest">Layanan & Garansi Tarif</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Daftar Layanan CV GEBRINA JAYA</h1>
        <p class="text-slate-300 max-w-2xl mx-auto text-sm sm:text-base">
            Kami menyediakan solusi sanitasi komprehensif dengan peralatan teknologi vakum modern dan estimasi biaya transparan.
        </p>
    </div>
</section>

<!-- SERVICES GRID -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-slate-200 flex flex-col justify-between hover:shadow-2xl transition-all duration-300 group">
                    <div>
                        <div class="relative h-52 overflow-hidden">
                            <img src="{{ asset($service->image_path ?? 'images/services/service-sedot-wc.jpg') }}" alt="{{ $service->name }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-3 right-3 bg-slate-900/90 text-amber-400 font-extrabold text-xs px-3 py-1 rounded-full border border-slate-700">
                                {{ $service->price_info }}
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h2 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">
                                <a href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                            </h2>
                            
                            <p class="text-sm text-slate-600 leading-relaxed">
                                {{ $service->short_description }}
                            </p>

                            @if(!empty($service->features))
                                <div class="pt-2">
                                    <h4 class="text-xs font-extrabold text-slate-400 uppercase tracking-wider mb-2">Keunggulan Layanan:</h4>
                                    <ul class="space-y-1.5 text-xs text-slate-700">
                                        @foreach($service->features as $feat)
                                            <li class="flex items-center space-x-2">
                                                <svg class="w-4 h-4 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                                <span>{{ $feat }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="p-6 pt-0 border-t border-slate-100 mt-4 flex items-center justify-between">
                        <a href="{{ route('services.show', $service->slug) }}" class="text-xs font-bold text-blue-600 hover:text-blue-800">
                            Selengkapnya &rarr;
                        </a>
                        <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode('Halo CV GEBRINA JAYA, saya mau tanya/pesan layanan ' . $service->name) }}" target="_blank" class="px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-xs shadow-md transition-colors flex items-center space-x-1.5">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                            <span>Pesan WA</span>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
