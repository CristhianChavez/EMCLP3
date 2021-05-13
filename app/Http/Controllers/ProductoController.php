<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    protected function registarproductos(Request $data){

        $data->validate([
            'producto' => ['required', 'string', 'min:3', 'max:255'],
            'sequimiento' => ['required', 'integer'],

        ]);
        $idsesion = auth()->id();
        $producto = new Producto();
        $producto->producto = $data["producto"];
        $producto->idcliente = $idsesion;
        $producto->sequimiento = $data["sequimiento"];
        $producto->save();
    }

    public function mostarproducto(){
        $idsesion = auth()->id();
        $resultado = Producto::where("idcliente",$idsesion)->get();
        return view("mostarproducto",["resultado"=>$resultado]);
    }

}
