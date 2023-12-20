<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('member_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Member_Name');
            $table->string('Member_phone');
            $table->unsignedBigInteger('Trainer_id');
            $table->timestamps();

            $table->foreign('Trainer_id')->references('trainer_models')->on('id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_models');
    }
};
