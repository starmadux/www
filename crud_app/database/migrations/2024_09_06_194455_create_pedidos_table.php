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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_ped')->nullable();
            $table->string('cliente')->nullable();
            $table->string('produto')->nullable();
            $table->integer('quant')->nullable();
            $table->decimal('valor_ped', 8,2)->nullable();
            $table->decimal('valor_desc', 8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
