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
        Schema::create('status_companies', function (Blueprint $table) {
            $table->id();
            $table->text('comentary');
            $table->unsignedBigInteger('id_offer');
            $table->timestamps();
            $table->foreign('id_offer')->references('id')->on('offers')->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_companies');
    }
};
