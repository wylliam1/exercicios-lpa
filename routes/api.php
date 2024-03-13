<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('uestao1q', function (Request $request) {
    $nome = $request->input('nome');
    return $nome;
});

Route::get('questao2', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return $nome . $idade;
});

Route::get('questao3', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    $cidade = $request->input('cidade');
    return  'Meu nome é ' . $nome . ' minha idade é' .  $idade . ' minha cidade é ' . $cidade;
});

Route::get('questao4', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero + $segundoNumero;
    return  $resultado;
});

Route::get('questao5', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $terceiroNumero = $request->input('terceiroNumero');
    $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
    return $resultado;
});

Route::get('questao6', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero / $segundoNumero;
    return  $resultado;
});

Route::get('questao7', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $primeiroNumero * $segundoNumero;
    return $resultado;
});

Route::get('questao8', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $terceiroNumero = $request->input('terceiroNumero');
    $quartoNumero = $request->input('quartoNumero');
    $quintoNumero = $request->input('quintoNumero');
    $resultado = ($primeiroNumero + $segundoNumero + $terceiroNumero + $quartoNumero + $quintoNumero) / 5;
    return $primeiroNumero . '+' . $segundoNumero . '+' . $terceiroNumero . '+' . $quartoNumero . '+' . $quintoNumero . '=' . $resultado;
});

Route::get('questao9/', function (Request $request) {
    $primeiroNumero = $request->input('primeiroNumero');
    $segundoNumero = $request->input('segundoNumero');
    $resultado = $segundoNumero / $primeiroNumero;
    return $primeiroNumero . '/' . $segundoNumero  . '=' . $resultado;
});

route::get('questao10/', function (Request $request) {
    $numero = $request->input('numero');
    $resultado = $numero * 2;
    return 'O dobro do número ' . $numero . ' é igual a: ' . $resultado;
});

Route::get('questao11/', function (Request $request) {
    $base = $request->input('base');
    $altura = $request->input('altura');
    $resultado = $base * $altura;
    return $resultado;
});

Route::get('questao12', function (Request $request) {
    $valorTotal = $request->input('ValorTotal');
    $Desconto = $request->input('Desconto');
    $Porcentagem  = $valorTotal / 100;
    $resultado = $valorTotal = + ($Desconto * $Porcentagem);
    return  $resultado;
});

Route::get('questao13', function (Request $request) {
    $produto = $request->input('number1');
    $desconto = $request->input('number2');
    $resultado = $desconto / 100 * $produto;
    $resultado2 = $produto + $resultado;
    return 'O salario é de ' . $produto . ', com o aumento de ' . $desconto . '%, o salario dele será de ' . $resultado2;
});

Route::get('questao14', function (Request $request) {
    $valorinicial = $request->input('valor');
    $resultado = $valorinicial / 10;
    return $resultado;
});

Route::get('questao15',function(Request $request){
    $preçoproduto = $request->input('preçoproduto');
    $comissão = $request->input('comissão');
    $porcentagem = $preçoproduto / 100;
    $resultado  = $preçoproduto + ($porcentagem * $comissão);
    return $resultado;
});

Route::get('questao16', function (request $request) {
    
    $dias = $request->input('dias');

    $horas = $dias * 54;

    $minutos = $horas * 60;

    $segundos = $minutos * 60;

    $resultado = "dias: " . $dias . ", horas: " . $horas . ", minutos: " . $minutos . ", segundos: " . $segundos;

    return $resultado;
});

Route::get('questao17', function (request $request) {
$precoProduto = $request->input('Produto');
$quantidade = $request->input('quantidade');
$resultado = "valor total: " . $precoProduto * $quantidade;
return $resultado;
});