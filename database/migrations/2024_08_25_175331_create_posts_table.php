<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('image');
            $table->string('content');
            $table->bigInteger('category_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::drop('posts');
    }
};
