<?php

use Illuminate\Database\Seeder;
use SystemDirectory\Entities\User;

class UsersTableSeeder extends Seeder{

        public function  run()
        {
            $this->createAdmin();
        }


    public function createAdmin()
    {

        User::create([

            'ficha' => '019495',
            'full_name' => 'Luis Alfonso Gómez Zúñiga',
            'email' => 'alfonso.gomezz@pemex.com',
            'password'=> bcrypt( 'pemex' )

        ]);

    }

}