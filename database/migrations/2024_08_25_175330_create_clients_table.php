<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('d_o_b');
            $table->integer('blood_type_id')->unsigned();
            $table->string('last_donation_date');
            $table->integer('city_id')->unsigned();
            $table->string('pin_code');
        });
    }

    public function down()
    {
        Schema::drop('clients');
    }
};
