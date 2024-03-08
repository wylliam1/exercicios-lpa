<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::get('questao1', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});