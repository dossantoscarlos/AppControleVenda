<?php

declare(strict_types=1);

use App\Models\Categoria;
use App\Models\Estoque;
use App\Models\TipoProduto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('sku')->unique();
            $table->string('slug')->unique();
            $table->string('descricao_curta');
            $table->text('descricao_longa');
            $table->string('codigo_barra')->unique();
            $table->decimal('preco_custo', 10, 2);
            $table->decimal('preco_venda', 10, 2);
            $table->string('marca');
            $table->foreignId(Categoria::class)->constrained();
            $table->foreignId(Estoque::class)->constrained();
            $table->foreignId(TipoProduto::class)->constrained();
            $table->date('data_validade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
