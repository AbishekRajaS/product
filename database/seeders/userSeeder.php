<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {DB::table("users")->insert([
            'name'=>'Abishek',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
        ]);
        }
    }
}
