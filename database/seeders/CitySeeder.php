<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cityData = ['Jakarta', 'Bandung', 'Garut', 'Depok', 'Ciamis'];
        foreach ($cityData as $key => $value) {
            City::updateOrCreate([
                'name' => $value
            ]);
        }
    }
}
