<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'ano', 'vagas'];

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class, 'matriculas', 'turma_id', 'aluno_id')
            ->withPivot('data_matricula')
            ->withTimestamps();
    }
    public function getVagasDisponiveisAttribute()
{
    return $this->vagas - $this->alunos->count();
}

}
