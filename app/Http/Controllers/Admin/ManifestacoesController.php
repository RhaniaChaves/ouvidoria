<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manifestacao;
use Illuminate\Http\Request;
use Exception;

class ManifestacoesController extends Controller
{
    public function index() 
    {
        $manifestacoes = Manifestacao ::all();
        
        return view('admin.index')
            ->with('manifestacoes', $manifestacoes);   
    }

    public function update(Request $request, $id)
    {
        try {
            $manifestacao = Manifestacao::find($id);
            $manifestacao->status = $request->input('status');
            $manifestacao->save();

            session()->flash('sucesso', true);
            return redirect()->back();

        } catch(Exception $e){
            return response('Erro ao salvar dados', 500);
        }
    }
    
    public function delete($id)
    {
        try {
            $manifestacao = Manifestacao::find($id);
            $manifestacao->delete();
            
            session()->flash('sucesso', true);
            return redirect()->back();
        } catch (\Exception $e) {
            return response('Erro ao excluir dados', 500);
        }
    }
}
