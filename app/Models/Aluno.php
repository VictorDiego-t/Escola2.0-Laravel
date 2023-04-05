<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'data_nascimento', 'cpf','turma_id'];

    public function turmas()
    {
        return $this->belongsTo(Turma::class, 'matriculas', 'aluno_id', 'turma_id')
            ->withPivot('data_matricula')
            ->withTimestamps();
    }
    public function chamada()
    {
        return $this->hasMany(Chamada::class);
    }
    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}