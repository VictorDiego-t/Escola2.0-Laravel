<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
        public function index()
    {
        $turmas = Turma::all();
        return view('turma.index', compact('turmas'));
    }

    public function create()
    {
        return view('turma.create');
    }

    public function store(Request $request)
    {
        $turma = new Turma;
        $turma->descricao = $request->descricao;
        $turma->ano = $request->ano;
        $turma->vagas = $request->vagas;
        $turma->save();

        return redirect()->route('turma.index');
    }

    public function edit($id)
    {
        $turma = Turma::findOrFail($id);
        return view('turma.edit', compact('turma'));
    }

    public function update(Request $request, Turma $turma)
    {
        $turma->descricao = $request->descricao;
        $turma->ano = $request->ano;
        $turma->vagas = $request->vagas;
        $turma->save();

        return redirect()->route('turma.index');
    }
    
    // public function destroy($id)
    // {
    //     $turma = Turma::findOrFail($id);
    
    //     try {
    //         DB::beginTransaction();
    //         $turma->delete();
    //         DB::commit();
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         throw new \Exception($e);
    //     }
    
    //     return redirect()->route('turma.index')->with('success', 'Turma removida com sucesso!');
    // }
    
}
