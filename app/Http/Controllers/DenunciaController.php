<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proposta;

use App\Denuncia;

class DenunciaController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); //auth:admin
    }
    
    public function index()
    {
        $props = Proposta::all();
        $dens = Denuncia::all();
        return view('denuncias',compact('props','dens')); 
    }

    public function apagarProposta($id_den,$id_prop)
    {
        $den = Denuncia::find($id_den);
        $prop = Proposta::find($id_prop);
        if (isset($den) AND isset($prop)){
            $den->delete();
            $prop->delete();
        }
        return redirect('/denuncias');
    }
}
