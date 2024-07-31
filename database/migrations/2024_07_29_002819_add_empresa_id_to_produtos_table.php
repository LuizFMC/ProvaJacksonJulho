<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Verifica se a coluna não existe antes de adicioná-la
        if (!Schema::hasColumn('produtos', 'empresa_id')) {
            Schema::table('produtos', function (Blueprint $table) {
                $table->unsignedBigInteger('empresa_id')->nullable()->after('id');
                $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('set null');
            });
        }
    }

    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['empresa_id']);
            $table->dropColumn('empresa_id');
        });
    }
};