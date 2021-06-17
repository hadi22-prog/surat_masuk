<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id');
            $table->rememberToken();
            $table->timestamps();
        });
           DB::table('users')->insert(
            array(
                'name' => 'Admin',
                'email' => 'admin@technomail.com',
                'password' => bcrypt('technomail'),
                'role_id' => '2',
                )
                );

            DB::table('users')->insert(
            array(
                'name' => 'Disposition',
                'email' => 'disposition@technomail.com',
                'password' => bcrypt('technomail'),
                'role_id' => '3',
                )
                );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
