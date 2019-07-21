<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;
use App\Socio;

class EmprestimoController extends Controller
{

    public function emprestaLivro($livro_id, $socio_id){

        $livro = Livro::findOrFail($livro_id);
        if($livro){
            $socio = Socio::findOrFail($socio_id);
            if($socio){
                $livro->socio_id = $socio->id;
                $livro->save();
                return response()->json([$livro]);
            }
            else{
                return response()->json(['Esta pessoa não existe no nosso banco de dados']);
            }
        }
        else{
            return response()->json(['Este livro não existe no nosso banco de dados']);
        }

    }

    public function devolveLivro($livro_id, $socio_id){
        $livro = Livro::findOrFail($livro_id);
        if($livro){
            $socio = Socio::findOrFail($socio_id);
            if($socio){
                $livro->socio_id = NULL;
                $livro->save();
                return response()->json([$livro]);
            }
            else{
                return response()->json(['Esta pessoa não existe no nosso banco de dados']);
            }
        }
        else{
            return response()->json(['Este livro não existe no nosso banco de dados']);
        }
    }

}
