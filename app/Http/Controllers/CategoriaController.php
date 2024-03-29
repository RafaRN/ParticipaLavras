<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class CategoriaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $cats = Categoria::all();
        return view('categorias',compact('cats'));
    }

    public function create()
    {
        return view('cadastrarCategorias');
    }

    public function store(Request $request)
    {
        $cat = new Categoria();
        $cat->nome = $request->input('nomeCategoria');
        $cat->save();
        return redirect('categorias');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cat = Categoria::find($id);
        if(isset($cat)){
            return view('editarCategoria', compact('cat'));
        }
        return redirect('/categorias');
    }

    public function update(Request $request, $id)
    {
        $cat = Categoria::find($id);
        if(isset($cat)){
            $cat->nome = $request->input('nomeCategoria');
            $cat->save();
        }
        return redirect('/categorias');
    }

    public function destroy($id)
    {
        $cat = Categoria::find($id);
        if (isset($cat)){
            $cat->delete();  
        }
        return redirect('/categorias');
    }
}
