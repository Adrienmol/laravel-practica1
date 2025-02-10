<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Corto extends Model
{
    use HasFactory;

    
    /**
     * Devuelve el objeto 'Usuario' del corto
     */
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Devuelve el objeto 'Director' del corto
     */
    public function director()
    {
        return $this->belongsTo(Director::class);
    }
}
