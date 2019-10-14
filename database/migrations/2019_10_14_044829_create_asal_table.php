<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asal', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->string('kode_asal', 5);
            $table->string('asal', 100);
            $table->string('address', 150);
            $table->string('city', 50);
            $table->string('province', 50);
            $table->string('postal_code', 20);
            $table->string('email', 50);
            $table->string('phone', 15);
            $table->string('contact_person', 50);
            $table->string('cp_phone', 15);
            $table->string('dokter_id', 20);
            $table->string('status_pasien', 20);
            $table->date('order_date');
            $table->string('hasil', 20);
            $table->integer('discount_percentage')->length(11);
            $table->integer('fee_percentage')->length(11);
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
        Schema::dropIfExists('asal');
    }
}
