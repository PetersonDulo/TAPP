<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPaginas extends Controller
{
    public function index(){
        $titulo = 'Testando isso!';

        //passar o conteudo de uma variavel para a view ou para uma pagina
        // return view('paginas.index',compact('titulo'));
        return view('paginas.index')->with('titulo', $titulo);
    }

    public function acerca (){
        $titulo = 'Acerca de nos';
        return view('paginas.acerca')->with('titulo',$titulo);
    }

    public function servicos(){
        $dados = array(
            'titulo' => 'Servicos',
            'servi' => ['Web Design','Programação', 'SEO']
        );
        return view('paginas.servicos')->with($dados);
    }
}
