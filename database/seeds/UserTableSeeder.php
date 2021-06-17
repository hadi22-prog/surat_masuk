<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = array(
            
             array(
        'name'=> 'Admin',
        'email'=> 'admin@technomail.com',
        'role_id'=> '2',
        'password'=> Hash::make('technomail')
        ),

             array(
        'name'=> 'disposition',
        'email'=> 'disposition@technomail.com',
        'role_id'=> '3',
        'password'=> Hash::make('technomail')
        )
             );
                 DB::table('users')->insert( $user );

    }
    }
