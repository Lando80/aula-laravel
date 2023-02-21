<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $guarded = [
        'id', 'create_id', 'update_id'
    ];

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'produtos_categorias');
    }
}
