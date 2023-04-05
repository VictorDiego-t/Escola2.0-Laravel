<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        $turmas = Turma::all();
        return view('alunos.index', compact('alunos', 'turmas'));
    }

    public function create()
    {
        $turmas = Turma::all();
        return view('alunos.create', compact('turmas'));
    }

    public function store(Request $request)
    {
        $turma = Turma::findOrFail($request->turma_id);
    
        if ($turma->vagas > 0) {
            $validatedData = $request->validate([
                'nome' => 'required|max:255',
                'data_nascimento' => 'required|date',
                'turma_id' => 'required|exists:turmas,id'
            ]);
    
            $aluno = new Aluno;
            $aluno->nome = $request->nome;
            $aluno->cpf = $request->cpf;
            $aluno->data_nascimento = $request->data_nascimento;
            $aluno->turma_id = $request->turma_id;
            $aluno->save();
    
            $turma->vagas--;
            $turma->save();
    
            $aluno->matriculas()->create(['turma_id' => $request->turma_id]);
    
            return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
        } else {
            return redirect()->back()->withErrors(['A turma selecionada não tem vagas disponíveis. Por favor, escolha outra turma ou aguarde a abertura de novas vagas.'])->withInput();
        }
    }
    
    
    

    public function show($id)
    {
        $aluno = Aluno::find($id);
        return view('alunos.show', compact('aluno'));
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        $turmas = Turma::all();
        return view('alunos.edit', compact('aluno', 'turmas'));
    }

    public function update(Request $request, $id)
    {
        // Validar o formulário
        $request->validate([
            'nome' => 'required|max:255',
            'data_nascimento' => 'required|date',
            'turma_id' => 'required|exists:turmas,id',
            'cpf' => 'required|unique:alunos,cpf,' . $id,
        ]);
    
        // Atualizar o aluno
        $aluno = Aluno::findOrFail($id);
        $aluno->nome = $request->input('nome');
        $aluno->data_nascimento = $request->input('data_nascimento');
        $aluno->turma_id = $request->input('turma_id');
        $aluno->cpf = $request->input('cpf');
        $aluno->save();
    
        // Redirecionar para a página de visualização do aluno
        return redirect()->route('alunos.index', $aluno->id);
    }

}