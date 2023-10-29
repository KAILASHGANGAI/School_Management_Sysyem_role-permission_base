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
        Schema::create('takeatds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staff_id')->nullable();
            $table->foreignId('faculty_id');
            $table->foreignId('semesters_id');
            $table->foreignId('section_id')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('takeatds');
    }
};
