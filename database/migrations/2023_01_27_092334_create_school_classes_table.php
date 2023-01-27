<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id');
            $table->integer('schoolyear');
            $table->string('age_group');
            $table->string('title');
            $table->foreignId('teacher');
            $table->string('description');


            // Model columns come here

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('school_classes');
    }
};
