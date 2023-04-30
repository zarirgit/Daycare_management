<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollsTable extends Migration
{
    public function up()
    {
        Schema::create('enrolls', function (Blueprint $table) {
            $table->id();
            $table->string('child_name');
            $table->string('time_slot');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enrolls');
    }
}