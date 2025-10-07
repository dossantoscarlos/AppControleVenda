<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vendedor extends Model
{
    protected $table = "vendedores";

    protected $fillable = [
      'matricula',
      'user_id',
      'telefone',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
