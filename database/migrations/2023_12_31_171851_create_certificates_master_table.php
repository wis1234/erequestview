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
        Schema::create('certificates_master', function (Blueprint $table) {
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
            $table->string('delay');
            $table->string('defense_date');

            $table->string('status')->nullable();
            $table->string('feedback')->nullable();
            $table->string('birth_cert');
            $table->string('cip'); 
            $table->string('id_card'); 
            $table->string('student_card');
            $table->string('enrolle1');
            $table->string('enrolle2');
            $table->string('school_fees1');
            $table->string('school_fees2');
            $table->string('enrolle_defense');
            $table->string('dis_cover_page');
            $table->string('cert_dis_def');
            $table->string('cue_m1');
            $table->string('cue_m2');


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
        Schema::dropIfExists('certificates_master');
    }
};
