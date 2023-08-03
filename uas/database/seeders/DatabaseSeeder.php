<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        \App\Models\User::factory()->create([
            'name' => 'Muhammad Arif A.',
            'email' => 'a@gmail.com',
            'email_verified_at' => now(),
            'password'=> bcrypt('123123'),
            'remember_token'=>Str::random(10),
            'role'=>'admin'
        ]);

        $this->call(BukuSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(RakSeeder::class);
    }
}
