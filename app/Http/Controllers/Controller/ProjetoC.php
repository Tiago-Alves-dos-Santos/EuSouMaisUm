<?php

namespace App\Http\Controllers\Controller;

use App\Model\Galeria;
use App\Model\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetoC extends Controller
{
    public function homepage()
    {
        $projeto = Projeto::orderBy('Data_Final','desc')->paginate(2);
//        foreach ($projeto as $p){
//            echo "$p->Objetivo_projeto <br>";
//        }
        return view('index-pages.index', compact('projeto'));
    }

    public function viewGaleria(Request $req){
        $projeto = new Projeto();
        $projeto->id = $req->id;
        $galeria = new Galeria();
        $galeria = $projeto->getGaleria($galeria);
        return view('projeto.galeria', compact('galeria'));
    }
    public function viewInformacoes(Request $req)
    {
        $projeto = Projeto::find($req->id);
        return view('leiamais', compact('projeto'));
    }
}
