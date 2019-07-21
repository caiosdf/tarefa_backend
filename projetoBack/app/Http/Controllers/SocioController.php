<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Socio;

class SocioController extends Controller
{

  public function createSocio(Request $request){
      $socio = new Socio;
      $socio->nome = $request->nome;
      $socio->cpf = $request->cpf;
      $socio->telefone = $request->telefone;
      $socio->endereço = $request->endereço;
      $socio->email = $request->email;
      $socio->save();
      return response()->json([$socio]);
  }

  public function listSocio(){
      return Socio::all();
  }

  public function showSocio($id){
      $socio = Socio::findOrFail($id);
      return $socio;
  }

  public function updateSocio(Request $request, $id){
      $socio = Socio :: findOrFail($id);
      if($request->nome){
          $socio->nome = $request->nome;
      }
      if($request->cpf){
          $socio->cpf = $request->cpf;
      }
      if($request->telefone){
          $socio->telefone = $request->telefone;
      }
      if($request->endereço){
          $socio->endereço = $request->endereço;
      }
      if($request->email){
          $socio->email = $request->email;
      }
      $socio->save();
      return response()->json([$socio]);
  }

  public function deleteSocio($id){
      Socio :: destroy($id);
      return response()->json(['Socio deletado']);
  }

}
