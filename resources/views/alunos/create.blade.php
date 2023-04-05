@extends('layouts.app')

@section('content')
    <h1>Cadastro de Aluno</h1>
    @if($turmas->count() > 0)
        <form method="POST" action="{{ route('alunos.store') }}">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="form-control">
            </div>
            <div class="form-group">
                <label for="turma_id">Turma:</label>
                <select name="turma_id" id="turma_id" class="form-control">
                    @foreach($turmas as $turma)
                        <option value="{{ $turma->id }}">{{ $turma->descricao }} ({{ $turma->vagas }} vagas disponíveis)</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
        @if($errors->any())
            <div class="alert alert-danger mt-3">
                {{ $errors->first() }}
            </div>
        @endif
    @else
        <p>Não há turmas cadastradas. Por favor, crie uma turma antes de adicionar um aluno.</p>
        <a href="{{ route('turma.create') }}" class="btn btn-success">Criar Turma</a>
    @endif
@endsection
