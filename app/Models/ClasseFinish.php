<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseFinish extends Model
{
    use HasFactory;

    public function aula()
    {
        return $this->belongsTo(Classe::class, 'classe_id', 'id');
    }
}
