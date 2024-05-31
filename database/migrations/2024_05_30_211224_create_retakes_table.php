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
        Schema::create('retakes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ac_year');
            $table->string('ac_level');
            $table->string('ac_level_old');
            $table->string('field');
            $table->string('program');
            $table->string('semester');
            $table->string('fiche_inscription')->nullable();
            $table->text('description')->nullable();
            $table->string('status');
            $table->string('ped_lunch')->nullable();
            $table->string('hour')->nullable();
            $table->string('treat_time')->nullable();
            $table->string('current_time')->nullable();

            $table->string('retake_lunch')->nullable();

            $table->text('feedback')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retakes');
    }
};
