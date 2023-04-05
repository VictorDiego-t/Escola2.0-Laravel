@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Relatório de Chamadas</h1>
        <form method="GET" action="{{ route('chamadas.index') }}">
            <div class="form-group">
                <label for="turma_id">Filtrar por turma:</label>
                <select name="turma_id" id="turma_id" class="form-control" onchange="this.form.submit()">
                    <option value="">Todas as turmas</option>
                    @foreach ($turmas as $turma)
                        <option value="{{ $turma->id }}" {{ old('turma_id', request()->turma_id) == $turma->id ? 'selected' : '' }}>{{ $turma->descricao}}</option>
                    @endforeach
                </select>
            </div>
        </form>
        <form method="POST" action="{{ route('chamadas.salvar') }}">
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Situação</th>
                        <th>Chamada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->nome }}</td>
                            <td>
                                @if ($aluno->data_nascimento && strtotime($aluno->data_nascimento))
                                    {{ (new DateTime($aluno->data_nascimento))->format('d/m/Y') }}
                                @endif
                            </td>
                            <td>{{ $aluno->chamada }}</td>
                            <td>
                                <select name="chamada[{{ $aluno->id }}]">
                                    <option value="Presente">Presente</option>
                                    <option value="Falta">Falta</option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if(count($alunos) == 0)
                <div class="alert alert-warning">Não há alunos para fazer chamada nesta turma.</div>
            @else
                <div class="row">
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-primary" id="salvar-chamada" name="submit">Salvar</button>
                    </div>
                    <a href="{{ route('home') }}" class="btn btn-danger float-right">Voltar</a>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            @endif
        </form>
    </div>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('#salvar-chamada').addEventListener('click', function() {
                let chamada = {};
                document.querySelectorAll('select[name^="chamadas"]').forEach(function(select) {
                    chamada[select.getAttribute('name').match(/\[(\d+)\]/)[1]] = select.value;
                });
                fetch('{{ route("chamadas.salvar") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ chamada })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                })
                .catch(error => {
                    console.error(error);
                });
            });
        });
    </script>
@endsection
