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
        Schema::create('testimonies', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('ocupation')->nullable();
            $table->string('testimonie')->nullable();

            $table->string('url_image_antes')->nullable();
            $table->string('name_image_antes')->nullable();

            $table->string('url_image_posterior')->nullable();
            $table->string('name_image_posterior')->nullable();

            $table->boolean('visible')->default(false);
            $table->boolean('status')->default(false);

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonies');
    }
};