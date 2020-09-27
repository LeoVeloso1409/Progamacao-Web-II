<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function Servicos(){
        $titulo = "Nossos Serviços";

        $servicos = ['Massagem', 'Depilação', 'Limpeza de Pele', 'Desing de Sobrancelhas' ];

        return view('index', compact('titulo', 'servicos'));
    }
}
