<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// Permite pegar valores de inputs 
use Illuminate\Http\Request;

// Permite o uso do banco de dados
use Illuminate\Support\Facades\DB;

// Permite upload de arquivos 
use Illuminate\Http\UploadedFile;

// Permite redirecionar páginas
use Illuminate\Routing\Redirector;

class salasController extends Controller
{
    function selecionarSala()
    {

    }

    function cadastrarSala(Request $request)
    {
    	$nome = $request->input('nomeSala');
    	$img = $request->file('ImagemSala')->store('img_sala');

    	DB::table('tb_sala_santos')->insert(
            [ 'nm_sala' => $nome ,'img_sala' => $img]
        );

        salasController::exibirSalas();
    }

    function excluirSala()
    {

    }

    function exibirSalas()
    {
        $nome = DB::table('tb_sala_santos')->select('nm_sala')->whereNotNull('nm_sala')->pluck('nm_sala');
        $caminho = DB::table('tb_sala_santos')->select('img_sala')->whereNotNull('img_sala')->pluck('img_sala');
      
        //if(isset($nome) && isset($caminho))
        //{
            return view('salas/salassantos', ['nome' => $nome, 'caminho' => $caminho]);

           // return view('salas/salassantos', compact('user'));
        //}else
       // {
          //  return view('salas/salassantos');
       //
       
    }
}
