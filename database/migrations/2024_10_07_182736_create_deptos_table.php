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
        Schema::create('deptos', function (Blueprint $table) {
            $table->id('id');
            $table->String('nombredepto',100)->unique();
            $table->String('nombremediano',15)->unique();
            $table->String('nombrecorto',5)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deptos');
    }
};
