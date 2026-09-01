@extends('layouts.app')

@section('title', 'Galeri Kegiatan & Armada - CV GEBRINA JAYA')
@section('meta_description', 'Dokumentasi foto kegiatan lapangan, armada truk vakum, proses sedot septic tank, dan pelancaran saluran mampet CV GEBRINA JAYA.')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-slate-900 text-white py-16 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-extrabold text-amber-400 uppercase tracking-widest">Dokumentasi Lapangan</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Galeri Pekerjaan & Armada</h1>
        <p class="text-slate-300 max-w-2xl mx-auto text-sm sm:text-base">
            Bukti nyata pengerjaan profesional tim kami di berbagai perumahan, gedung kantor, ruko, dan industri Jabodetabek.
        </p>
    </div>
</section>

<!-- GALLERY CONTENT WITH ALPINE LIGHTBOX -->
<section x-data="{ 
    modalOpen: false, 
    activeImage: '', 
    activeTitle: '', 
    activeDesc: '', 
    activeCat: '',
    openModal(img, title, desc, cat) {
        this.activeImage = img;
        this.activeTitle = title;
        this.activeDesc = desc;
        this.activeCat = cat;
        this.modalOpen = true;
    }
}" class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <!-- CATEGORY FILTER TABS -->
        <div class="flex flex-wrap items-center justify-center gap-2">
            @foreach($categories as $catKey => $catLabel)
                <a href="{{ route('gallery', ['category' => $catKey]) }}" class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all {{ ($category == $catKey || ($catKey == 'all' && empty($category))) ? 'bg-blue-600 text-white shadow-lg' : 'bg-white text-slate-700 hover:bg-slate-200 border border-slate-200' }}">
                    {{ $catLabel }}
                </a>
            @endforeach
        </div>

        <!-- PHOTO GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse($galleryItems as $item)
                <div @click="openModal('{{ asset($item->image_path) }}', '{{ addslashes($item->title) }}', '{{ addslashes($item->description ?? '') }}', '{{ $item->category }}')" class="bg-white rounded-2xl overflow-hidden shadow-md border border-slate-200 cursor-pointer group hover:shadow-2xl transition-all duration-300">
                    <div class="relative h-60 overflow-hidden">
                        <img src="{{ asset($item->image_path) }}" alt="{{ $item->title }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-slate-950/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <span class="p-3 bg-white/90 text-slate-900 rounded-full shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                            </span>
                        </div>
                    </div>
                    <div class="p-4 space-y-1">
                        <span class="inline-block text-[10px] font-extrabold uppercase tracking-wider text-blue-600 bg-blue-50 px-2 py-0.5 rounded">
                            {{ ucfirst(str_replace('-', ' ', $item->category)) }}
                        </span>
                        <h4 class="font-bold text-slate-900 text-sm line-clamp-2">{{ $item->title }}</h4>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12 text-slate-500">
                    Belum ada foto untuk kategori ini.
                </div>
            @endforelse
        </div>

    </div>

    <!-- ALPINE LIGHTBOX MODAL -->
    <div x-show="modalOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/90 backdrop-blur-md" style="display: none;" @keydown.escape.window="modalOpen = false">
        
        <div @click.away="modalOpen = false" class="bg-white rounded-3xl overflow-hidden max-w-4xl w-full shadow-2xl border border-slate-700 relative flex flex-col md:flex-row max-h-[90vh]">
            
            <!-- Close Button -->
            <button @click="modalOpen = false" class="absolute top-4 right-4 z-20 w-9 h-9 bg-slate-900/80 text-white hover:bg-slate-900 rounded-full flex items-center justify-center font-bold text-xl">
                &times;
            </button>

            <!-- Modal Image Left -->
            <div class="md:w-3/5 bg-slate-950 flex items-center justify-center p-2">
                <img :src="activeImage" :alt="activeTitle" class="max-h-[60vh] md:max-h-[75vh] w-auto object-contain rounded-xl">
            </div>

            <!-- Modal Details Right -->
            <div class="md:w-2/5 p-6 md:p-8 flex flex-col justify-between space-y-6 bg-white overflow-y-auto">
                <div class="space-y-3">
                    <span class="inline-block text-xs font-extrabold uppercase tracking-wider text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md" x-text="activeCat"></span>
                    <h3 class="text-xl font-extrabold text-slate-900 leading-snug" x-text="activeTitle"></h3>
                    <p class="text-sm text-slate-600 leading-relaxed" x-text="activeDesc"></p>
                </div>

                <div class="pt-4 border-t border-slate-200 space-y-3">
                    <div class="text-xs text-slate-500 font-semibold">Butuh penanganan serupa di lokasi Anda?</div>
                    <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode('Halo CV GEBRINA JAYA, saya mau tanya pekerjaan sesuai foto galeri.') }}" target="_blank" class="w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-xs flex items-center justify-center space-x-2 transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        <span>Hubungi via WhatsApp</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
