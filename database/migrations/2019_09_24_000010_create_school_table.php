<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolTable extends Migration
{
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            $table->increments('id');

            $table->string('group');

            $table->integer('number');

            $table->integer('payment');

            $table->string('audience');

            $table->string('duration');

            $table->longText('description')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
