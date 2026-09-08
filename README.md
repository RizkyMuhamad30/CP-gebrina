# CV GEBRINA JAYA - Production Website Profile

Website official company profile untuk **CV GEBRINA JAYA**, penyedia layanan profesional jasa sedot WC, pengurasan septic tank, pelancaran saluran mampet, dan pengelolaan limbah industri di wilayah Jabodetabek (Jakarta, Bogor, Depok, Tangerang, Bekasi).

---

## 🛠️ Tech Stack & Spesifikasi

- **Backend**: Laravel 11 (PHP 8.2+)
- **Frontend**: Blade Templating + Tailwind CSS v4 + Alpine.js
- **Database**: MySQL (`services`, `service_areas`, `gallery_items`, `testimonials`)
- **SEO & Schema**: Meta Tags dinamis, Schema.org `LocalBusiness` JSON-LD, OpenGraph, `sitemap.xml`, `robots.txt`
- **Asset Build**: Vite

---

## 🚀 Fitur Utama Website

1. **Beranda (`/`)**:
   - Hero Section dengan CTA WhatsApp & Telepon langsung
   - Keunggulan Perusahaan (24/7 Respon Cepat, Selang 100m+, Garansi 100%)
   - Preview Layanan Unggulan & Badge Coverage Jabodetabek
   - Testimoni Pelanggan dengan Star Rating
   - Statistik Perusahaan
2. **Tentang Kami (`/tentang-kami`)**:
   - Profil & Sejarah Perusahaan
   - Visi & Misi Usaha
   - Legalitas Usaha (NIB & Izin Pembuangan Limbah Resmi Dinas LH)
3. **Daftar Layanan (`/layanan`) & Detail Layanan (`/layanan/{slug}`)**:
   - Sedot WC Rumahan & Perumahan
   - Sedot WC Kantor, Ruko & Gedung
   - Pelancaran Saluran Mampet (Tanpa Bongkar)
   - Pembuatan & Perbaikan Septic Tank Bio-Filter Baru
   - Sedot Limbah Industri & Restoran (Grease Trap)
4. **Wilayah Layanan (`/wilayah-layanan`)**:
   - Jangkauan wilayah Jabodetabek (Jakarta, Bogor, Depok, Tangerang, Bekasi)
   - Embed Google Maps lokasi kantor & area operasional
5. **Galeri (`/galeri`)**:
   - Grid dokumentasi foto armada & hasil kerja
   - Filter Kategori Tabs
   - Lightbox Modal Popup interaktif menggunakan Alpine.js
6. **Floating WhatsApp Component**:
   - Tombol melayang sticky kanan bawah di semua halaman dengan pesan pre-filled kontekstual

---

## ⚙️ Panduan Instalasi (Step-by-Step)

### 1. Clone Repository & Install Dependencies

```bash
cd c:\laragon\www\CP
composer install
npm install
```

### 2. Konfigurasi Environment (`.env`)

Copy file `.env.example` ke `.env`:

```bash
cp .env.example .env
php artisan key:generate
```

Sesuaikan konfigurasi database MySQL di `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cv_gebrina_jaya
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Migrasi & Seeder Database

Jalankan perintah migrasi dan pengisian data seeder statis:

```bash
php artisan migrate:fresh --seed
```

### 4. Build Frontend Asset

Kompilasi asset Tailwind CSS & Alpine.js:

```bash
npm run build
```

### 5. Jalankan Server Lokal

```bash
php artisan serve
```

Akses website di browser: **`http://127.0.0.1:8000`**

---

## 📄 Struktur Folder Utama

```
CP/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php
│   │   ├── ServiceController.php
│   │   ├── PageController.php
│   │   ├── SitemapController.php
│   │   └── RobotsController.php
│   └── Models/
│       ├── Service.php
│       ├── ServiceArea.php
│       ├── GalleryItem.php
│       └── Testimonial.php
├── config/
│   └── company.php              # Centralized Company Profile Config
├── database/
│   ├── migrations/              # Database Schema Migrations
│   └── seeders/                 # Application Data Seeders
├── resources/
│   └── views/
│       ├── components/          # Navbar, Footer, Floating WA
│       ├── layouts/             # Base Layout (app.blade.php)
│       └── pages/               # Views for pages
├── routes/
│   └── web.php                  # Web Route Definitions
└── public/
    └── images/                  # Product, Service & Gallery Images
```
