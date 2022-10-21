<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat Faker
        $faker = fake('ja_JP');

        for ($i = 0; $i < 10; $i++) {
            Buku::create([
                'judul' => $faker->word(),
                'penulis' => $faker->name(),
                'penerbit' => $faker->word(),
                'sinopsis' => $faker->paragraph(),
                'jumlah' => $faker->randomNumber(2, false),
                'harga' => $faker->randomNumber(6, true),
                'kategori_id' => $faker->numberBetween(1, 3),
            ]);
        }
    }
}
