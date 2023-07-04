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
        Schema::create('service_skills', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('services_id');
            $table->unsignedBigInteger('skills_id');
    
            $table->foreign('skills_id')->references('id')->on('skills');
            $table->foreign('services_id')->references('id')->on('services');
            $table->unique(['services_id', 'skills_id']);
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_skills');
    }
};
