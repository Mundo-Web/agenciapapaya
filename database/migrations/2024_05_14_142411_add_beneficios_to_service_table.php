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
        Schema::table('services', function (Blueprint $table) {
            $table->string('name_beneficio1')->nullable();
            $table->text('description_beneficio1')->nullable();
            $table->string('name_beneficio2')->nullable();
            $table->text('description_beneficio2')->nullable();
            $table->string('name_beneficio3')->nullable();
            $table->text('description_beneficio3')->nullable();
            $table->string('name_beneficio4')->nullable();
            $table->text('description_beneficio4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service', function (Blueprint $table) {
            //
        });
    }
};
