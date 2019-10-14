<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->increments('id', 11);
            $table->string('name',255);
            $table->string('spaces', 100);
            $table->string('extract_details', 150);
            $table->string('latin name', 150);
            $table->string('food_group', 100);
            $table->text('avoid_food');
            $table->text('alternative_food');
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
        Schema::dropIfExists('food');
    }
}
