<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Braulio Cerralta',
            'email' => 'bcerralta@gmail.com',
            'password' => bcrypt('password')
        ])->assignRole('Admin');
        
        User::factory(99)->create();
    }
}
