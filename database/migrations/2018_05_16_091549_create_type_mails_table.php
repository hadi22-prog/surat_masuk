<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_mails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_mail');
            $table->timestamps();
        });
           DB::table('type_mails')->insert(
            array(
                'type_mail' => 'Surat Masuk',
                )
                );

            DB::table('type_mails')->insert(
            array(
                                'type_mail' => 'Surat Keluar',

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
        Schema::dropIfExists('type_mails');
    }
}
