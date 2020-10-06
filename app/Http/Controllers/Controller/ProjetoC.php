<?php

namespace App\Http\Controllers\Controller;

use App\Model\Projeto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjetoC extends Controller
{
    public function homepage()
    {
        $projeto = Projeto::orderBy('Data_Final','desc')->paginate(2);
        return view('index-pages.index', compact('projeto'));
    }
}
