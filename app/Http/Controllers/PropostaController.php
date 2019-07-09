<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proposta;

use App\Categoria;

use App\User;

use App\Denuncia;

class PropostaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        $props = Proposta::all();
        $users = User::all();
        $cats = Categoria::all();
        return view('propostas',compact('props','users','cats')); 
    }

    public function indexAdmin()
    {
        $props = Proposta::all();
        $users = User::all();
        $cats = Categoria::all();
        return view('propostas-admin',compact('props','users','cats')); 
    }

    public function create()
    {
        $cats = Categoria::all();
        return view('cadastroProposta',compact('cats'));
    }

    public function store(Request $request)
    {
        $prop = new Proposta();
        $prop->nome = $request->input('nomeProposta');
        $prop->descricao = $request->input('descricaoProposta');
        $prop->classificacao = "Pendente";
        $prop->n_votos = 1;
        $prop->categoria_id = $request->get('opCategoria');
        $userA = auth()->user();
        $prop->usuario_id = $userA->id;
        $prop->save();
        return redirect('propostas');
    }

    public function votar(){
        //$prop->n_votos = $prop->n_votos+1;
    }

    public function classificar(Request $request, $id)
    {
        $prop = Proposta::find($id);
        if(isset($prop)){
            $prop->classificacao = $request->input('opClassificacao');
            $prop->save();
        }
        return redirect('/propostas-admin');
    }

    public function teste()
    {
        $cats = Categoria::all();
        return view('propostasteste',compact('cats')); 
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        $prop = Proposta::find($id);
        if (isset($prop)){
            $prop->delete();  
        }
        return redirect('/propostas-admin');
    }

    public function denunciar($id)
    {
        $prop = Proposta::find($id);
        if(isset($prop)){
            return view('denunciar',compact('prop'));
        }
        return redirect('/propostas');
    }

    public function enviarDenuncia(Request $request, $id)
    {
        $den = new Denuncia();
        $den->descricao = $request->input('denuncia');
        $den->proposta_id = $id;
        $den->save();
        return redirect('propostas');
    }
}
