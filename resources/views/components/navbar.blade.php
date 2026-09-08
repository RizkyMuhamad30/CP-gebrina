<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-40 bg-slate-900/95 backdrop-blur-md border-b border-slate-800 text-white shadow-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo & Brand Name -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-blue-700 via-blue-600 to-amber-500 p-0.5 shadow-lg group-hover:scale-105 transition-transform duration-300">
                    <div class="w-full h-full bg-slate-900 rounded-[10px] flex items-center justify-center">
                        <!-- Truck / Water Pump Icon -->
                        <svg class="w-7 h-7 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17a2 2 0 100 4 2 2 0 000-4zm10 0a2 2 0 100 4 2 2 0 000-4zM4 9h11v6H4V9zm11 2h4l2 3v3h-6v-6z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <span class="block text-lg font-extrabold tracking-tight text-white leading-tight">CV GEBRINA JAYA</span>
                    <span class="block text-[11px] font-medium text-amber-400 uppercase tracking-widest">Sedot WC & Septic Tank</span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center space-x-1 font-medium text-sm">
                <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('home') ? 'bg-blue-600 text-white font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                    Beranda
                </a>
                <a href="{{ route('services.index') }}" class="px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('services.*') ? 'bg-blue-600 text-white font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                    Layanan
                </a>
                <a href="{{ route('areas') }}" class="px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('areas') ? 'bg-blue-600 text-white font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                    Wilayah Layanan
                </a>
                <a href="{{ route('gallery') }}" class="px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('gallery') ? 'bg-blue-600 text-white font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                    Galeri
                </a>
                <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg transition-colors {{ request()->routeIs('about') ? 'bg-blue-600 text-white font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-800' }}">
                    Tentang Kami
                </a>
            </nav>

            <!-- Right CTA Phone & WhatsApp Button -->
            <div class="hidden sm:flex items-center space-x-3">
                <a href="tel:{{ config('company.contact.phone_raw') }}" class="text-xs font-semibold text-slate-300 hover:text-white hidden xl:flex items-center space-x-1.5 px-3 py-2 rounded-lg hover:bg-slate-800">
                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <span>{{ config('company.contact.phone_display') }}</span>
                </a>
                <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode(config('company.contact.whatsapp_message_default')) }}" target="_blank" class="bg-gradient-to-r from-emerald-500 to-green-600 hover:from-emerald-600 hover:to-green-700 text-white font-bold text-xs sm:text-sm px-4 py-2.5 rounded-xl shadow-lg shadow-emerald-950/50 hover:shadow-emerald-900/80 transition-all duration-300 flex items-center space-x-2">
                    <!-- WhatsApp Icon -->
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.572-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span>Hubungi WA</span>
                </a>
            </div>

            <!-- Mobile Hamburger Toggle Button -->
            <div class="flex lg:hidden items-center space-x-2">
                <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode(config('company.contact.whatsapp_message_default')) }}" target="_blank" class="bg-emerald-600 text-white p-2 rounded-lg shadow sm:hidden">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                </a>
                <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="p-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-800 focus:outline-none">
                    <svg x-show="!mobileMenuOpen" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg x-show="mobileMenuOpen" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4" class="lg:hidden bg-slate-900 border-b border-slate-800 px-4 pt-2 pb-6 space-y-2" style="display: none;">
        <a href="{{ route('home') }}" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->routeIs('home') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Beranda
        </a>
        <a href="{{ route('services.index') }}" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->routeIs('services.*') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Layanan Kami
        </a>
        <a href="{{ route('areas') }}" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->routeIs('areas') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Wilayah Layanan Jabodetabek
        </a>
        <a href="{{ route('gallery') }}" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->routeIs('gallery') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Galeri Kegiatan & Armada
        </a>
        <a href="{{ route('about') }}" class="block px-4 py-3 rounded-lg text-base font-semibold {{ request()->routeIs('about') ? 'bg-blue-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
            Tentang Perusahaan
        </a>
        <div class="pt-4 border-t border-slate-800 space-y-2">
            <a href="tel:{{ config('company.contact.phone_raw') }}" class="flex items-center justify-center space-x-2 w-full py-3 bg-slate-800 rounded-xl text-white font-semibold">
                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <span>Telepon: {{ config('company.contact.phone_display') }}</span>
            </a>
            <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode(config('company.contact.whatsapp_message_default')) }}" target="_blank" class="flex items-center justify-center space-x-2 w-full py-3 bg-emerald-600 hover:bg-emerald-700 rounded-xl text-white font-bold">
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>Chat via WhatsApp 24 Jam</span>
            </a>
        </div>
    </div>
</header>
