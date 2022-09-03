<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([    

         'name' => 'Shayeque',  
         'mobile' => '6290077513',  
         'email' => 'admin@gmail.com',   
         'password' => Hash::make('12345678'),   
         'image' => '',
         'created_at' => Carbon::now()->toDateTimeString(),
         'updated_at' => Carbon::now()->toDateTimeString(),

      ]);
    }
}
