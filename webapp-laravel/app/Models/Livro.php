<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'genero', 'capa_url', 'autor_id'];

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }
}
