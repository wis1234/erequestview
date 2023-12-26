<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('complaint_id')->nullable();
            $table->unsignedBigInteger('certificate_id')->nullable();
            $table->unsignedBigInteger('diploma_id')->nullable();
            $table->unsignedBigInteger('stu_id')->nullable();
            $table->string('path');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('complaint_id')->references('id')->on('complaints')->onDelete('cascade');
            $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');
            $table->foreign('diploma_id')->references('id')->on('diplomas')->onDelete('cascade');
            $table->foreign('stu_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('image', function (Blueprint $table) {
            // Drop foreign key constraints
            $table->dropForeign(['complaint_id']);
            $table->dropForeign(['certificate_id']);
            $table->dropForeign(['diploma_id']);
            $table->dropForeign(['stu_id']);
        });
        
        Schema::dropIfExists('image');
    }
}
