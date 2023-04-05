@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Turma</h1>
        <hr>
        <form method="POST" action="{{ route('turma.store') }}">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao">
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="number" class="form-control" id="ano" name="ano">
            </div>
            <div class="form-group">
                <label for="vagas">Vagas:</label>
                <input type="number" class="form-control" id="vagas" name="vagas">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{ route('turma.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
@endsection