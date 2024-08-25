<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('clientables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('client_id');
            $table->morphs('clientable');
        });
    }

    public function down()
    {
        Schema::drop('clientables');
    }
};
