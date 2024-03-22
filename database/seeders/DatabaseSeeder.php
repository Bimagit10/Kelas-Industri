<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Todo;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            "name" => "Ilham Maulana",
            "email" => "admin@gmail.com",
            "password" => bcrypt('12345'),
        ]);
        User::factory(9)->create();
        Todo::factory(20)->create();
    }
}
