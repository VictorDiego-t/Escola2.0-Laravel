@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Turma</h1>
        <hr>
        <form method="POST" action="{{ route('turma.update', $turma->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $turma->descricao }}">
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" class="form-control" id="ano" name="ano" value="{{ $turma->ano }}">
            </div>
            <div class="form-group">
                <label for="vagas">Vagas:</label>
                <input type="number" class="form-control" id="vagas" name="vagas" value="{{ $turma->vagas }}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('turma.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
@endsection