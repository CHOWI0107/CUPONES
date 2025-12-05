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
       Schema::create('cupones', function (Blueprint $table) {
    $table->id();
    $table->foreignId('product')->constrained('products')->restrictOnDelete()->cascadeOnUpdate();
    $table->foreignId('store')->constrained('stores')->restrictOnDelete()->cascadeOnUpdate();
    $table->decimal('monto', 10, 2);
    $table->string('ticket');
    $table->string('cupon')->unique();
    $table->foreignId('type_cupon')->constrained('type_cupons')->restrictOnDelete()->cascadeOnUpdate();
    $table->foreignId('user')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
    $table->foreignId('store_from')->constrained('stores')->restrictOnDelete()->cascadeOnUpdate(); // <- AQUÍ
    $table->timestamps();
    $table->unique(['store', 'cupon']);
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupones');
    }
};
