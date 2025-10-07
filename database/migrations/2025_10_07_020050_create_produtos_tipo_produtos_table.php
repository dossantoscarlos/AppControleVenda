<?php

use App\Models\Produto;
use App\Models\TipoProduto;
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
        Schema::create('produto_tipo_produto', function (Blueprint $table) {
            $table->id();
            $table->foreignId(Produto::class);
            $table->foreignId(TipoProduto::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_tipo_produtos');
    }
};
