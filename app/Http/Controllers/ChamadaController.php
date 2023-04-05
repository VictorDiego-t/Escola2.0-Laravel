<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Aluno;
use App\Models\Chamada;
use Carbon\Carbon;

class ChamadaController extends Controller
{
    public function index()
    {
        $turmas = Turma::all();
        $alunos = Aluno::query();
        if (request()->has('turma_id')) {
            $turma_id = request('turma_id');
            if(!empty($turma_id)){
                $alunos->where('turma_id', $turma_id);
            }else{
                // remove o parâmetro turma_id da URL
                $url = url()->current();
                $url = strtok($url, '?');
                return redirect($url);
            }
        }
        $alunos = $alunos->get();
        $chamadas = Chamada::all();
        $chamadas->transform(function ($chamada, $key) {
            $chamada->data_chamada = Carbon::parse($chamada->data_chamada)->format('d/m/Y');
            return $chamada;
        });
        return view('chamadas.index', compact('turmas', 'alunos', 'chamadas'));
        
    }
    
    
    
    public function salvar(Request $request)
    {
        $chamadas = $request->input('chamada');
    
        foreach ($chamadas as $aluno_id => $chamada) {
            $aluno = Aluno::find($aluno_id);
    
            if ($aluno) {
                $aluno->chamada = $chamada;
                $aluno->save();
    
                $nova_chamada = new Chamada;
                $nova_chamada->data = date('Y-m-d');
                $nova_chamada->presente = ($chamada == 1) ? 'falta' : 'presente';
                $nova_chamada->aluno_id = $aluno_id;
                $nova_chamada->save();
            }
        }
    
        return redirect()->back()->with('success', 'As informações de chamada foram salvas com sucesso!');
    }
    
    
}
