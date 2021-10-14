<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
   public function index(Request $peticion){
    $arreglo =['nombre'=>$peticion->query('nombre','NN')];
       return view('vista1')->with('$arreglo');
   }
   public function login(Request $peticion){
    $arreglo =['nombre'=>$peticion->query('nombre','NN')];
       return view('login')->with('$arreglo');
   }

}
