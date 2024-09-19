<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User',
            'apellido'=>'apellido test',
            'dni'=>'11111111A',
            'email' => 'seguridadweb@campusviu.es',
            'password' => Hash::make('S3gur1d4d?W3b'),
        ]);
    }
}
