@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Gerenciar Alunos</h1>
            @if($turmas->count() > 0)
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Turma Id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{ $aluno->nome }}</td>
                                <td>{{ $aluno->data_nascimento }}</td>
                                <td>{{ $aluno->turma_id }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" class="text-center">
                                <a href="{{ route('alunos.create') }}" class="btn btn-success">Adicionar Novo Aluno</a>
                                <a href="{{ route('home') }}" class="btn btn-danger float-right">Voltar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @else
                <p>Não há turmas cadastradas. Por favor, crie uma turma antes de adicionar um aluno.</p>
                <a href="{{ route('turma.create') }}" class="btn btn-success">Criar Turma</a>
            @endif
        </div>
    </div>
@endsection
