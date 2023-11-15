<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(2)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'Elfa Amaria',
            'email' => 'elfaamaria@gmail.com',
            'password' => bcrypt('elfa123'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730048',
            'tgl' => '2023-11-13',


        ]);
    }
}
