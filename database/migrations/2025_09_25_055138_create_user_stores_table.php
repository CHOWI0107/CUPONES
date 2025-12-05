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
        Schema::create('user_stores', function (Blueprint $table) {
    $table->foreignId('_user')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
    $table->foreignId('_store')->constrained('stores')->restrictOnDelete()->cascadeOnUpdate();
    $table->unique(['_user', '_store']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_stores');
    }
};
