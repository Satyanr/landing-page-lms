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
        Schema::create('mdl_course', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category')->default(0);
            $table->string('fullname');
            $table->string('shortname');
            $table->longText('summary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mdl_courses');
    }
};
