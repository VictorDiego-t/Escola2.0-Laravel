<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = ['aluno_id', 'turma_id', 'data_matricula'];
    
    protected $attributes = [];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->data_matricula = now();
        });
    }
}
