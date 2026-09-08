<footer class="bg-slate-950 text-slate-300 pt-16 pb-12 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
            
            <!-- Col 1: About Company -->
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-lg bg-blue-600 flex items-center justify-center text-amber-400 font-bold">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17a2 2 0 100 4 2 2 0 000-4zm10 0a2 2 0 100 4 2 2 0 000-4zM4 9h11v6H4V9zm11 2h4l2 3v3h-6v-6z"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-extrabold text-white tracking-tight">CV GEBRINA JAYA</span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Spesialis penyedia jasa sedot WC, pengurasan septic tank, pelancaran saluran mampet, dan penyedotan limbah cair industri di wilayah Jabodetabek. Siap bertugas 24 Jam Nonstop dengan cepat, bersih, dan bergaransi.
                </p>
                <div class="pt-2 flex items-center space-x-3">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-950 text-emerald-400 border border-emerald-800">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 mr-2 animate-ping"></span>
                        Respon 24 Jam Nonstop
                    </span>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div>
                <h3 class="text-white text-base font-bold mb-4 tracking-wide uppercase text-xs">Navigasi Utama</h3>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Beranda Utama</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-amber-400 transition-colors">Profil CV GEBRINA JAYA</a></li>
                    <li><a href="{{ route('services.index') }}" class="hover:text-amber-400 transition-colors">Daftar Layanan Kami</a></li>
                    <li><a href="{{ route('areas') }}" class="hover:text-amber-400 transition-colors">Jangkauan Wilayah Jabodetabek</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-amber-400 transition-colors">Galeri Hasil Kerja & Armada</a></li>
                </ul>
            </div>

            <!-- Col 3: Services Offered -->
            <div>
                <h3 class="text-white text-base font-bold mb-4 tracking-wide uppercase text-xs">Layanan Unggulan</h3>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('services.show', 'sedot-wc-rumahan') }}" class="hover:text-amber-400 transition-colors">Sedot WC & Septic Tank Rumahan</a></li>
                    <li><a href="{{ route('services.show', 'sedot-wc-kantor-ruko') }}" class="hover:text-amber-400 transition-colors">Sedot WC Ruko, Perkantoran & Gedung</a></li>
                    <li><a href="{{ route('services.show', 'pelancaran-saluran-mampet') }}" class="hover:text-amber-400 transition-colors">Pelancaran Pipa Mampet (Tanpa Bongkar)</a></li>
                    <li><a href="{{ route('services.show', 'pembuatan-septic-tank-baru') }}" class="hover:text-amber-400 transition-colors">Pembuatan Septic Tank Bio-Filter Baru</a></li>
                    <li><a href="{{ route('services.show', 'sedot-limbah-industri-restoran') }}" class="hover:text-amber-400 transition-colors">Kuras Grease Trap Restoran & Limbah</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact & Operating Hours -->
            <div>
                <h3 class="text-white text-base font-bold mb-4 tracking-wide uppercase text-xs">Kontak & Alamat</h3>
                <ul class="space-y-3 text-sm text-slate-300">
                    <li class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>{{ config('company.contact.address') }}</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <a href="tel:{{ config('company.contact.phone_raw') }}" class="hover:text-amber-400 font-semibold">{{ config('company.contact.phone_display') }}</a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <a href="mailto:{{ config('company.contact.email') }}" class="hover:text-amber-400">{{ config('company.contact.email') }}</a>
                    </li>
                    <li class="flex items-center space-x-3 text-amber-400 font-medium">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Jam Kerja: 24 Jam Nonstop</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Bottom Copyright & Legalities -->
        <div class="pt-8 flex flex-col md:flex-row items-center justify-between text-xs text-slate-500 space-y-4 md:space-y-0">
            <div>
                &copy; {{ date('Y') }} <strong class="text-slate-300">CV GEBRINA JAYA</strong>. Hak Cipta Dilindungi Undang-Undang.
            </div>
            <div class="flex items-center space-x-4">
                <span>{{ config('company.legalities.nib') }}</span>
                <span>•</span>
                <span>Pembuangan Resmi IPLT LH</span>
            </div>
        </div>
    </div>
</footer>
