<?php

namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat Faker
        $faker = fake('ko_KR');

        for($i = 0; $i < 3; $i++){
            kategori::create([
                'jenis_kategori' => $faker->city()
            ]);
        }
    }
}
