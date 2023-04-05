@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Teste Emprego</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('turma.index') }}">Turmas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alunos.index') }}">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chamadas.index') }}">Presenças</a>
                </li>

            </ul>
        </div>
    </nav>
    
    <div class="container" style="background-color: #f5f5f5">
        <h1>Bem-vindo(a) ao sistema de escola</h1>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h2>Turmas</h2>
                <p>Acesse aqui as turmas cadastradas e adicione novas turmas:</p>
                <a href="{{ route('turma.index') }}" class="btn btn-primary">Gerenciar Turmas</a>
                <a href="{{ route('turma.create') }}" class="btn btn-success">Adicionar Nova Turma</a>
            </div>
            <div class="col-md-6">
                <h2>Alunos</h2>
                <p>Acesse aqui os alunos cadastrados e adicione novos alunos:</p>
                <a href="{{ route('alunos.index') }}" class="btn btn-primary">Gerenciar Alunos</a>
                <a href="{{ route('alunos.create') }}" class="btn btn-success">Adicionar Novo Aluno</a>
            </div>
            <div class="col-md-6 mt-4">
                <h2>Presenças</h2>
                <p>Acesse aqui o Relatório de Presenças:</p>
                <a href="{{ route('chamadas.index') }}" class="btn btn-info">Gerenciar Presenças</a>
            </div>
        </div>
    </div>
@endsection
