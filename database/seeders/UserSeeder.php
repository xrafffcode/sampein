<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhamad Rafli Al Farizqi',
            'email' => 'yusfiwawan@gmail.com',
            'password' => bcrypt('rafli200405*'),
        ]);
    }
}
