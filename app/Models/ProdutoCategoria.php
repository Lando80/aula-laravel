<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoCategoria extends Model
{
    use HasFactory;
    protected $guarded = [
        'id', 'create_id', 'update_id'
    ];

    protected $table = 'produtos_categorias';
}
