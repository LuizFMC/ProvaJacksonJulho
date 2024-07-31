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
        Schema::create('dietas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->String('cafe');
            $table->String('lanche1');
            $table->String('almoco');
            $table->String('lanche2');
            $table->String('janta');
            $table->String('ceia');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dietas');
    }
};
