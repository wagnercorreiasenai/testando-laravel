<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {

        $a = 10;
        $b = 20;
        $resultado = $a + $b;

        $arrayNumeros = [];
        $arrayNumeros ['num1'] = $resultado;
        $arrayNumeros ['num2'] = $a;

        return view('produtos.index', compact('resultado', 'arrayNumeros'));

    }
}
