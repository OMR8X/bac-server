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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->text("title");
            $table->text("size");
            $table->text("extension");
            $table->year("year")->nullable();
            $table->unsignedInteger("section_id")->nullable();
            $table->unsignedInteger("material_id")->nullable();
            $table->unsignedInteger("teacher_id")->nullable();
            $table->unsignedInteger("school_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
