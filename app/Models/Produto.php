<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Produto extends Model
{

    use SoftDeletes;
    protected $table = "produtos";

    protected static function boot() : void
    {
        parent::boot();

        static::creating(
            function ($model) : void
            {
                $model->uuid = $model->uuid ?? (string) Str::uuid();
            }
        );
    }

    protected $filable = [
        'sku',
        'slug',
        'descricao_curta',
        'descricao_longa',
        'codigo_barra',
        'preco_custo',
        'preco_venda',
        'marca',
        'estoque_id',
        'tipo_produto_id',
        'data_validate',
    ];
}
