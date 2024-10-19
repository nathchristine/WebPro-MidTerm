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
        if (!Schema::hasTable('results')) {
            Schema::create('results', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('competition_id');
                $table->unsignedBigInteger('participants_id');
                $table->foreign('competition_id')->references('id')->on('competition')->constrained()->onDelete('cascade');
                $table->foreign('participants_id')->references('id')->on('participants')->constrained()->onDelete('cascade');
                $table->integer('score');
                $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
