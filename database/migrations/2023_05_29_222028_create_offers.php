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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('price');
            $table->date('startDate');
            $table->date('endtDate');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('handymen_id');
            $table->foreign('handymen_id')->references('id')->on('handymen');
            $table->unsignedBigInteger('demandes_id');
            $table->foreign('demandes_id')->references('id')->on('demandes');
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
        Schema::dropIfExists('offers');
    }
};
