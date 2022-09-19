<?php

use Illuminate\Database\Seeder;
use App\User;
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
        User::create([
            'name' => 'firman',
            'email' => 'firmanaal@gmail.com',
            'no_tlp' => '081234567890',
            'alamat' => 'Rogojampi',
            'role' => 'admin',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'alfa',
            'email' => 'aal@gmail.com',
            'no_tlp' => '081235302557',
            'alamat' => 'Rogojampi',
            'role' => 'user',
            'password' => Hash::make('12345678')
        ]);
    }
}
