<?php

namespace App\Http\Controllers;

use App\Models\Desperdicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers;

use App\Models\Desperdicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class pagController extends Controller
{
    public function index()
    {
        return view('calendario'); // Altere para a view correta que deseja exibir
    }

    public function store(Request $request) 
    {
        $desperdicio = new Desperdicio();
        $desperdicio->data=$request->data;
        $desperdicio->escola=$request->escola;
        $desperdicio->quantidade=$request->quantidade;
        $desperdicio->descricao=$request->descricao;
        
        // Criação do registro
        // $desperdicio = Desperdicio::create([
        //     'data' => $request->input('data'),
        //     'escola' => $request->input('escola'),
        //     'quantidade' => $request->input('quantidade'),
        //     'descricao' => $request->input('descricao'),
        // ]);
        $desperdicio->save();
        return redirect('/nutriapp')->with('success', 'Cadastro realizado com sucesso!');
    }
}
