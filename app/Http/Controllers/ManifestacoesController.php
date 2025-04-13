<?php

namespace App\Http\Controllers;

use App\Models\Manifestacao;
use Illuminate\Http\Request;
use Exception;

class ManifestacoesController extends Controller
{
    public function create(){
        return view("formulario");
    }
    
    public function show($codigo_rastreio)
    {
        $manifestacao = Manifestacao::where('codigo_rastreio', $codigo_rastreio)->first();
        
        return response([
            'status' => ucwords($manifestacao->status)
        ], 201);
    }

    public function store(Request $request)
    {
        try {
        
            $manifestacao = Manifestacao::create([
                "nome_autor" => $request->input("nome_autor"),
                "codigo_rastreio"=> rand(0, 999),
                "data_envio"=> date("Y-m-d"),
                "categoria"=>$request->input("categoria"),
                "titulo"=>$request->input("titulo"),
                "descricao"=>$request->input("descricao"),
                "status"=> "aberta",
                "tipo_usuario"=>$request->input("tipo_usuario"),
            ]);

            session()->flash('codigo', $manifestacao->codigo_rastreio);
            return redirect()->back();
            
        } catch(Exception $e){
            
            return response([
                'Erro ao cadastrar dados'
            ], 500);
        }
    }
}
