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
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->integer('duration')->nullable();
            $table->string('tvg_name')->nullable();
            $table->string('xmlTvId')->nullable();
            $table->string('iconUrl')->nullable();
            $table->string('logoUrl')->nullable();
            $table->string('language')->nullable();
            $table->json('tags')->nullable(); // Stocke les tags sous forme JSON
            $table->string('group')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('channels');
    }
};