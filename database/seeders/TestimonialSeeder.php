<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'customer_name' => 'Bpk. Hendra Gunawan',
                'location' => 'Kebayoran Baru, Jakarta Selatan',
                'content' => 'Sangat puas dengan pelayanan CV Gebrina Jaya. Malam hari jam 10 WC rumah meluap, respon via WhatsApp super cepat. Dalam 45 menit armada truk sudah datang ke rumah dan pengerjaannya sangat bersih tanpa bau!',
                'rating' => 5,
                'service_used' => 'Sedot WC Rumahan',
            ],
            [
                'customer_name' => 'Ibu Ratna Dewi',
                'location' => 'BSD City, Tangerang Selatan',
                'content' => 'Rumah saya ada di gang yang lumayan sempit, tapi teknisi membawa selang panjang 60 meter jadi bisa sampai ke septic tank belakang. Pelayanannya sangat cepat dan profesional. Recommended!',
                'rating' => 5,
                'service_used' => 'Sedot WC Rumahan',
            ],
            [
                'customer_name' => 'Pak Bambang (Manager Restoran)',
                'location' => 'Margonda, Depok',
                'content' => 'Sudah langganan kuras grease trap & saluran kitchen mampet di CV Gebrina Jaya. Selalu datang tepat waktu di luar jam buka resto. Kerja rapi, tidak merusak pipa, dan ada garansinya.',
                'rating' => 5,
                'service_used' => 'Sedot Limbah Restoran',
            ],
            [
                'customer_name' => 'Bpk. Irwan Syahputra',
                'location' => 'Cibinong, Bogor',
                'content' => 'Dulu septic tank di rumah cepat penuh terus walau baru disedot. Konsultasi sama Pak teknisi Gebrina Jaya disarankan bikin resapan biopori baru. Sekarang sudah 2 tahun aman tidak pernah mampet lagi!',
                'rating' => 5,
                'service_used' => 'Pembuatan Septic Tank Baru',
            ],
            [
                'customer_name' => 'Ibu Fransiska',
                'location' => 'Harapan Indah, Bekasi',
                'content' => 'Wastafel dapur tersumbat lemak keras. Dipanggil teknisinya pakai mesin spiral rotar-rooter, 30 menit langsung lancar plong tanpa perlu bongkar keramik kitchen set. Luar biasa!',
                'rating' => 5,
                'service_used' => 'Pelancaran Saluran Mampet',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(['customer_name' => $testimonial['customer_name']], $testimonial);
        }
    }
}
