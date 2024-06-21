<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('ped_registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ac_year');
            $table->string('ac_level');
            $table->string('field');
            $table->string('program');
            $table->string('semester');
            $table->string('fiche_inscription')->nullable();
            $table->text('description')->nullable();
            $table->string('status');
            $table->string('ped_lunch')->nullable();
            $table->text('feedback')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ped_registrations');
    }
}
