@extends('layouts.app')

@section('title', config('company.name') . ' - Jasa Sedot WC & Septic Tank Jabodetabek 24 Jam')

@section('schema_json')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "{{ config('company.name') }}",
  "image": "{{ asset('images/hero-truck.jpg') }}",
  "@id": "{{ url('/') }}",
  "url": "{{ url('/') }}",
  "telephone": "{{ config('company.contact.phone_raw') }}",
  "priceRange": "Rp 300.000 - Rp 1.500.000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jl. Raya Bogor KM 26 No. 88, Ciracas",
    "addressLocality": "Jakarta Timur",
    "addressRegion": "DKI Jakarta",
    "postalCode": "13740",
    "addressCountry": "ID"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -6.310931,
    "longitude": 106.876678
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "areaServed": [
    "Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi"
  ],
  "sameAs": [
    "{{ config('company.socials.facebook') }}",
    "{{ config('company.socials.instagram') }}"
  ]
}
</script>
@endsection

@section('content')

<!-- HERO SECTION -->
<section class="relative bg-slate-900 text-white overflow-hidden py-16 lg:py-24">
    <!-- Background Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950 opacity-90"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <div class="inline-flex items-center space-x-2 px-3 py-1.5 rounded-full bg-blue-900/60 border border-blue-700 text-amber-400 text-xs sm:text-sm font-semibold">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-ping"></span>
                    <span>Layanan Resmi & Terpercaya Se-Jabodetabek</span>
                </div>

                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                    Jasa Sedot WC & Septic Tank <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-400 via-orange-400 to-amber-300">Cepat, Clean & Bergaransi</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Solusi tuntas septic tank penuh, saluran kloset meluap, wastafel tersumbat, dan limbah restoran. Dibekali armada truk vakum modern & selang panjang 100+ meter. Siap meluncur ke rumah Anda dalam 30 menit!
                </p>

                <!-- Hero CTA Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-3 sm:space-y-0 sm:space-x-4">
                    <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode(config('company.contact.whatsapp_message_default')) }}" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-emerald-500 via-emerald-600 to-green-600 hover:from-emerald-600 hover:to-green-700 text-white font-extrabold text-base shadow-xl shadow-emerald-950/60 hover:shadow-emerald-900/90 hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center space-x-3">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        <span>Pesan via WhatsApp (24 Jam)</span>
                    </a>
                    
                    <a href="{{ route('services.index') }}" class="w-full sm:w-auto px-7 py-4 rounded-xl bg-slate-800 hover:bg-slate-700 text-white border border-slate-700 font-bold text-base transition-colors flex items-center justify-center space-x-2">
                        <span>Lihat Semua Layanan</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="pt-6 grid grid-cols-3 gap-4 text-center lg:text-left border-t border-slate-800/80 max-w-lg mx-auto lg:mx-0">
                    <div>
                        <div class="text-xl sm:text-2xl font-extrabold text-amber-400">100%</div>
                        <div class="text-xs text-slate-400 font-medium">Garansi Tuntas</div>
                    </div>
                    <div>
                        <div class="text-xl sm:text-2xl font-extrabold text-amber-400">30 Menit</div>
                        <div class="text-xs text-slate-400 font-medium">Estimasi Tiba</div>
                    </div>
                    <div>
                        <div class="text-xl sm:text-2xl font-extrabold text-amber-400">24 Jam</div>
                        <div class="text-xs text-slate-400 font-medium">Layanan Nonstop</div>
                    </div>
                </div>

            </div>

            <!-- Right Hero Card / Image -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-2 border-slate-700/60 group">
                    <img src="{{ asset('images/hero-truck.jpg') }}" alt="Truk Vakum Sedot WC CV Gebrina Jaya" loading="lazy" class="w-full h-[380px] sm:h-[450px] object-cover group-hover:scale-105 transition-transform duration-500">
                    
                    <!-- Floating Overlay Card -->
                    <div class="absolute bottom-4 left-4 right-4 bg-slate-900/90 backdrop-blur-md p-4 rounded-xl border border-slate-700 text-white space-y-1">
                        <div class="flex items-center justify-between">
                            <span class="text-xs uppercase font-extrabold text-amber-400 tracking-wider">Armada Utama</span>
                            <span class="px-2 py-0.5 rounded bg-emerald-950 text-emerald-400 text-[10px] font-bold border border-emerald-800">Siap Operasional</span>
                        </div>
                        <h4 class="text-sm font-bold text-white">Truk Tangki Vakum High-Power (5000L)</h4>
                        <p class="text-xs text-slate-300">Penanganan higienis tanpa bau & jangkauan gang sempit.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- WHY CHOOSE US / FEATURES SECTION -->
<section class="py-16 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <h2 class="text-xs font-extrabold text-blue-600 uppercase tracking-widest">Keunggulan Perusahaan</h2>
            <h3 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Mengapa Memilih CV GEBRINA JAYA?</h3>
            <p class="text-sm sm:text-base text-slate-600">Komitmen kami adalah memberikan pelayanan sedot WC profesional, transparan, dan terpercaya bagi masyarakat Jabodetabek.</p>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach(config('company.features') as $feature)
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 hover:border-blue-500 hover:shadow-xl transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center mb-5 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        @if($feature['icon'] == 'bolt')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        @elseif($feature['icon'] == 'truck')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17a2 2 0 100 4 2 2 0 000-4zm10 0a2 2 0 100 4 2 2 0 000-4zM4 9h11v6H4V9zm11 2h4l2 3v3h-6v-6z"></path></svg>
                        @elseif($feature['icon'] == 'currency')
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        @else
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        @endif
                    </div>
                    <h4 class="text-lg font-bold text-slate-900 mb-2">{{ $feature['title'] }}</h4>
                    <p class="text-sm text-slate-600 leading-relaxed">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- SERVICES PREVIEW SECTION -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <h2 class="text-xs font-extrabold text-blue-600 uppercase tracking-widest">Layanan Kami</h2>
                <h3 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-1">Solusi Sanitasi Terlengkap</h3>
            </div>
            <a href="{{ route('services.index') }}" class="mt-4 md:mt-0 text-sm font-bold text-blue-600 hover:text-blue-700 flex items-center space-x-1">
                <span>Lihat Semua Layanan (5)</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services->take(3) as $service)
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg border border-slate-200 flex flex-col hover:shadow-2xl transition-all duration-300 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset($service->image_path ?? 'images/services/service-sedot-wc.jpg') }}" alt="{{ $service->name }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-md text-amber-400 text-xs font-extrabold px-3 py-1 rounded-full border border-slate-700">
                            {{ $service->price_info }}
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <h4 class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors mb-2">
                                <a href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                            </h4>
                            <p class="text-sm text-slate-600 line-clamp-3 leading-relaxed">
                                {{ $service->short_description }}
                            </p>
                        </div>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                            <a href="{{ route('services.show', $service->slug) }}" class="text-xs font-bold text-blue-600 hover:text-blue-800">
                                Detail Layanan &rarr;
                            </a>
                            <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode('Halo CV GEBRINA JAYA, saya tertarik dengan layanan ' . $service->name) }}" target="_blank" class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg text-xs font-bold transition-colors">
                                WA Langsung
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- COVERAGE AREA BADGES SECTION -->
<section class="py-16 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3">
            <h2 class="text-xs font-extrabold text-amber-400 uppercase tracking-widest">Jangkauan Armada</h2>
            <h3 class="text-2xl sm:text-4xl font-extrabold text-white tracking-tight">Wilayah Layanan Jabodetabek</h3>
            <p class="text-sm sm:text-base text-slate-300">Pos armada kami tersebar strategis untuk memberikan respon tercepat ke lokasi Anda.</p>
        </div>

        <div class="mt-10 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 text-center">
            @foreach(['Jakarta', 'Bogor', 'Depok', 'Tangerang', 'Bekasi'] as $cityName)
                <a href="{{ route('areas') }}" class="bg-slate-800/80 hover:bg-blue-600 p-5 rounded-2xl border border-slate-700 hover:border-blue-400 transition-all duration-300 group">
                    <div class="w-10 h-10 rounded-full bg-blue-900/80 text-amber-400 flex items-center justify-center mx-auto mb-3 group-hover:bg-white group-hover:text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    </div>
                    <h4 class="font-extrabold text-base text-white group-hover:text-white">Sedot WC {{ $cityName }}</h4>
                    <span class="text-xs text-slate-400 group-hover:text-blue-100 font-medium">Siap Meluncur 24h</span>
                </a>
            @endforeach
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('areas') }}" class="inline-flex items-center space-x-2 text-sm font-bold text-amber-400 hover:text-amber-300">
                <span>Lihat Seluruh Kecamatan Jabodetabek yang Dilayani</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>

    </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
            <h2 class="text-xs font-extrabold text-blue-600 uppercase tracking-widest">Testimoni Pelanggan</h2>
            <h3 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">Apa Kata Pelanggan Kami?</h3>
            <p class="text-sm text-slate-600">Kepercayaan dan kepuasan pelanggan adalah bukti nyata standar kerja profesional kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow">
                    <div class="space-y-3">
                        <!-- Rating Stars -->
                        <div class="flex items-center space-x-1 text-amber-400">
                            @for($i=0; $i<$testimonial->rating; $i++)
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="text-sm text-slate-700 italic leading-relaxed">
                            "{{ $testimonial->content }}"
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-200">
                        <div class="font-bold text-slate-900 text-base">{{ $testimonial->customer_name }}</div>
                        <div class="text-xs text-slate-500 font-medium">{{ $testimonial->location }}</div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- LIVE STATS SECTION -->
<section class="py-16 bg-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            @foreach(config('company.stats') as $stat)
                <div class="space-y-1">
                    <div class="text-4xl sm:text-5xl font-extrabold text-amber-400">{{ $stat['number'] }}</div>
                    <div class="text-sm sm:text-base font-semibold text-slate-200">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- BOTTOM CTA BANNER -->
<section class="py-16 bg-slate-950 text-white relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 text-center space-y-6 relative z-10">
        <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight">WC Mampet Atau Septic Tank Penuh Hari Ini?</h2>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto">
            Jangan tunggu sampai meluap dan merusak kenyamanan tempat tinggal Anda. Hubungi kami sekarang dan tim kami siap meluncur dengan harga transparan.
        </p>
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode('Halo CV GEBRINA JAYA, saya butuh penanganan darurat sedot WC sekarang.') }}" target="_blank" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-extrabold text-base shadow-xl flex items-center justify-center space-x-3">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>Panggil Armada Sekarang (WA)</span>
            </a>
            <a href="tel:{{ config('company.contact.phone_raw') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-bold border border-slate-700">
                Telepon: {{ config('company.contact.phone_display') }}
            </a>
        </div>
    </div>
</section>

@endsection
