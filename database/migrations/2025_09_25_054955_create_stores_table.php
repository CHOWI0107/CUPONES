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
        Schema::create('stores', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('alias')->unique();
    $table->string('dominio')->unique();
    $table->foreignId('store_type')->constrained('type_stores')->restrictOnDelete()->cascadeOnUpdate();

});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
