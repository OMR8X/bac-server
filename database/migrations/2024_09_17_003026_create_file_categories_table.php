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
        Schema::create('file_categories', function (Blueprint $table) {
            $table->id(column:"id");

            $table->unsignedBigInteger(column:"file_id");
            $table->foreign(columns: 'file_id')->references('id')->on('files')->onDelete('cascade');

            $table->unsignedInteger(column:"category_id");
            $table->foreign(columns: 'category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_categories');
    }
};
