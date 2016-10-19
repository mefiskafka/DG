<?php

use Illuminate\Database\Seeder;
use SystemDirectory\Entities\User;

class DatabaseSeeder extends Seeder{

    public function run()
    {
         $this->call(UsersTableSeeder::class);
    }
}
