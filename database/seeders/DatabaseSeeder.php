<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'Liam',
            'name' => 'admin Liam',
            'nomor_Telp' => '08976542535',
            'email' => 'adm@c.m',
            'password' => Hash::make(12345),
            'role' => 'admin'
        ]);

        $this->call(kategoriSeeder::class);
        $this->call(bukuSeeder::class);
    }
}
