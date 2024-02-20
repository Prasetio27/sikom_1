<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        user::create([
            'username' => 'Rikco27',
            'email' => 'rikco@gmail.com',
            'password' => hash::make('12345'),
            'nama_lengkap' => 'Rikco',
            'alamat' => 'Lebaksiuh',
            'role' => 'administrator'
        ]);
    }
}
