<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
// use database\seeders\UsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
    }
}