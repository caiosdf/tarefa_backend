<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    public function createLivro(Request $request){
        $livro = new Livro;
        $livro->nome = $request->nome;
        $livro->autor = $request->autor;
        $livro->edição = $request->edição;
        $livro->editora = $request->editora;
        $livro->categoria = $request->categoria;
        $livro->socio_id = $request->socio_id;
        $livro->save();
        return response()->json([$livro]);
    }

    public function listLivro(){
        return Livro::all();
    }

    public function showLivro($id){
        $livro = Livro::findOrFail($id);
        return $livro;
    }

    public function updateLivro(Request $request, $id){
        $livro = Livro :: findOrFail($id);
        if($request->nome){
            $livro->nome = $request->nome;
        }
        if($request->autor){
            $livro->autor = $request->autor;
        }
        if($request->edição){
            $livro->edição = $request->edição;
        }
        if($request->editora){
            $livro->editora = $request->editora;
        }
        if($request->categoria){
            $livro->categoria = $request->categoria;
        }
        if($request->socio_id){
            $livro->socio_id = $request->socio_id;
        }
        $livro->save();
        return response()->json([$livro]);
    }

    public function deleteLivro($id){
        Livro :: destroy($id);
        return response()->json(['Livro deletado']);
    }

}
