<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Memanggil StudentSeeder yang sudah kamu buat
        $this->call([
            StudentSeeder::class
        ]);
    }
}