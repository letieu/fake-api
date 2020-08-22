<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApisTable extends Migration
{

    public function up()
    {
        Schema::create('apis', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('entry');
            $table->json('data');
            $table->string('method');

        });
    }


    public function down()
    {
        Schema::dropIfExists('apis');
    }
}
