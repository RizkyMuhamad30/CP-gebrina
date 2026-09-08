<?php

namespace Database\Seeders;

use App\Models\ServiceArea;
use Illuminate\Database\Seeder;

class ServiceAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceArea::query()->delete();

        $areas = [
            ['city' => 'Jabodetabek', 'district' => 'Jakarta'],
            ['city' => 'Jabodetabek', 'district' => 'Bogor'],
            ['city' => 'Jabodetabek', 'district' => 'Depok'],
            ['city' => 'Jabodetabek', 'district' => 'Tangerang'],
            ['city' => 'Jabodetabek', 'district' => 'Bekasi'],
        ];

        foreach ($areas as $area) {
            ServiceArea::create([
                'city' => $area['city'],
                'district' => $area['district'],
                'coverage_details' => 'Melayani Seluruh Wilayah 24 Jam Nonstop'
            ]);
        }
    }
}
