@extends('layouts.app')

@section('title', 'Hubungi Kami - CV GEBRINA JAYA | Form & Kontak Direct 24 Jam')
@section('meta_description', 'Hubungi CV GEBRINA JAYA untuk pemesanan jasa sedot WC, septic tank penuh, atau konsultasi gratis. Siap melayani seluruh wilayah Jabodetabek 24 jam nonstop.')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-slate-900 text-white py-16 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
        <span class="text-xs font-extrabold text-amber-400 uppercase tracking-widest">Layanan Darurat & Konsultasi</span>
        <h1 class="text-3xl sm:text-5xl font-extrabold text-white tracking-tight">Hubungi CV GEBRINA JAYA</h1>
        <p class="text-slate-300 max-w-2xl mx-auto text-sm sm:text-base">
            Silakan kirim pesan melalui form atau hubungi kontak langsung kami. Tim customer service kami standby 24 Jam Nonstop.
        </p>
    </div>
</section>

<!-- CONTACT FORM & DIRECT INFO -->
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left: Direct Info Cards -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="bg-white rounded-2xl p-6 shadow-md border border-slate-200 space-y-6">
                    <h3 class="text-xl font-bold text-slate-900 border-b border-slate-100 pb-3">Informasi Kontak Perusahaan</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-100 text-blue-700 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Alamat Utama</h4>
                                <p class="text-sm font-semibold text-slate-800 mt-0.5">{{ config('company.contact.address') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Telepon / WhatsApp</h4>
                                <a href="tel:{{ config('company.contact.phone_raw') }}" class="block text-sm font-bold text-blue-600 hover:underline">{{ config('company.contact.phone_display') }}</a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Jam Operasional</h4>
                                <p class="text-sm font-bold text-amber-600 mt-0.5">{{ config('company.contact.operational_hours') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-emerald-600 to-green-700 rounded-2xl p-6 text-white shadow-xl space-y-3">
                    <h4 class="text-lg font-extrabold">Respon Cepat via WhatsApp</h4>
                    <p class="text-xs text-emerald-100 leading-relaxed">
                        Punya masalah darurat WC meluap saat ini? Dapatkan respon instan dari customer service kami.
                    </p>
                    <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode(config('company.contact.whatsapp_message_default')) }}" target="_blank" class="block text-center py-3 bg-white text-emerald-800 font-extrabold rounded-xl text-sm shadow hover:bg-emerald-50 transition-colors">
                        Chat WhatsApp Sekarang (24 Jam)
                    </a>
                </div>

            </div>

            <!-- Right: Contact Form -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-2xl p-8 shadow-xl border border-slate-200 space-y-6">
                    <div>
                        <h3 class="text-2xl font-extrabold text-slate-900">Kirim Pesan / Permintaan Layanan</h3>
                        <p class="text-sm text-slate-600 mt-1">Isi formulir di bawah ini dan tim kami akan segera membalasnya.</p>
                    </div>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Contoh: Bpk. Ahmad" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm @error('name') border-red-500 @enderror">
                                @error('name')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-xs font-extrabold text-slate-700 uppercase mb-1">No. HP / WhatsApp <span class="text-red-500">*</span></label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Contoh: 081234567890" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm @error('phone') border-red-500 @enderror">
                                @error('phone')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="email" class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Alamat Email (Opsional)</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="email@contoh.com" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm @error('email') border-red-500 @enderror">
                                @error('email')
                                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="location" class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Kota / Lokasi</label>
                                <input type="text" id="location" name="location" value="{{ old('location') }}" placeholder="Contoh: Kebayoran Baru, Jaksel" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="service_requested" class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Layanan Yang Dibutuhkan</label>
                            <select id="service_requested" name="service_requested" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
                                <option value="">-- Pilih Layanan --</option>
                                @foreach($services as $svc)
                                    <option value="{{ $svc->name }}" {{ old('service_requested') == $svc->name ? 'selected' : '' }}>{{ $svc->name }}</option>
                                @endforeach
                                <option value="Lainnya">Lainnya / Konsultasi</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-extrabold text-slate-700 uppercase mb-1">Isi Pesan / Detail Masalah <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="4" placeholder="Jelaskan kondisi kloset/septic tank Anda..." required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-extrabold text-base shadow-lg transition-colors flex items-center justify-center space-x-2">
                            <span>Kirim Pesan Sekarang</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- GOOGLE MAP EMBED -->
<section class="py-12 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-xl font-bold text-slate-900 mb-6 text-center">Lokasi Perusahaan Pada Google Maps</h3>
        <div class="rounded-2xl overflow-hidden shadow-lg border border-slate-200 h-[380px]">
            <iframe src="{{ config('company.contact.google_maps_embed') }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

@endsection
