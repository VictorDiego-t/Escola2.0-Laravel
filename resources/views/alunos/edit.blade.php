@extends('layouts.app')

@section('content')
    <h1>Edição de Aluno</h1>
    <form method="POST" action="{{ route('alunos.update', $aluno->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $aluno->nome }}">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value="{{ $aluno->data_nascimento }}">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $aluno->cpf }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
