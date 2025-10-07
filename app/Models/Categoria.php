<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = [
        'nome',
    ];

    // Define relationships, accessors, mutators, etc. here
    public function produtos(): HasMany
    {
        return $this->hasMany(Produto::class);
    }
}
