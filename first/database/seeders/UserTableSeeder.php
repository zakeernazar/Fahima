<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; 

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fahima',
            'email' => 'fahima@gmail.come',
            'date_of_birth' => '1997-10-09'
        ]);
    

        User::create([
            'name' => 'Zakeer',
            'email' => 'zakeergmail.come',
            'date_of_birth' => '1990-10-09'
        ]);
    }
}
