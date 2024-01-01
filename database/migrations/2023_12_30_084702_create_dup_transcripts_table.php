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
        Schema::create('dup_transcripts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('claimant_firstname');
            $table->string('claimant_lastname');
            $table->string('claimant_phone');
            $table->string('claimant_email');
            $table->string('ac_year');
            $table->string('ac_level');
            $table->string('mat');
            $table->string('field');
            $table->string('speciality');
            $table->string('exam_type');
            $table->string('status')->nullable();
            $table->string('feedback')->nullable();
            // $table->string('ecue_sub');
            $table->string('fiche_inscription'); 
            $table->string('cip'); 
            $table->string('inscription');
            $table->text('description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dup_transcripts');
    }
};
