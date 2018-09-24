<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGooglesTable extends Migration
{

    public function up()
    {
        Schema::create('googles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subject');
            $table->string('class');
            $table->string('author');
            $table->text('content');
            $table->boolean('published');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('googles');
    }
}
