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
        Schema::create('policlinics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('userId');
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->text('detail')->nullable();
            $table->string('specialization')->nullable();
            $table->string('location')->nullable();
            $table->string('status', 6)->default('False');
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
        Schema::dropIfExists('policlinics');
    }
};
