@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Turmas</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Ano</th>
                    <th>Vagas</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($turmas as $turma)
                <tr>
                    <td>{{ $turma->id }}</td>
                    <td>{{ $turma->descricao }}</td>
                    <td>{{ $turma->ano }}</td>
                    <td>{{ $turma->vagas }}</td>
                    <td>
                        <a href="{{ route('turma.edit', $turma->id) }}" class="btn btn-primary">Editar</a>
                        <!-- <form action="{{ route('turma.destroy', $turma->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir a turma {{ $turma->descricao }}?')">Excluir</button>
                        </form> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('turma.create') }}" class="btn btn-success">Nova Turma</a>
        <a href="{{ route('home') }}" class="btn btn-danger float-right">Voltar</a>


    </div>
@endsection
