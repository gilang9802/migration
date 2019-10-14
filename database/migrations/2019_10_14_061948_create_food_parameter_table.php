<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodParameterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_parameter', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('name', 20);
            $table->string('param_idn', 30);
            $table->string('type', 20);
            $table->integer('food_id')->length(11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_parameter');
    }
}
