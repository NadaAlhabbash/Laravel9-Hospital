<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('policlinic_id');
            $table->integer('doctor_id');
            $table->date('date');
            $table->time('time');
            $table->integer('price');
            $table->string('payment',20);
            $table->string('ip',20)->nullable();
            $table->string('note',100)->nullable();
            $table->string('status',30)->default('In Progress');
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
        Schema::dropIfExists('appointments');
    }
};
