<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'presente', 'aluno_id'];

    protected $hidden = ['created_at', 'updated_at'];
    
    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}

