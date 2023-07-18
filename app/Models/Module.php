<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function curso()
    {
        return $this->belongsTo(Module::class, 'course_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function aulas()
    {
        return $this->hasMany(Classe::class, 'module_id', 'id');
    }
}
