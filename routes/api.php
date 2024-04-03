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

Route::get('questao15', function (Request $request) {
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

Route::get('verifica/idade', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade >= 18) {
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});

// tarefas da aula do dia 20/03/2024.

Route::get('impar/par', function (Request $request) {
    $numeros = $request->input('numero');
    if ($numeros % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});
Route::get('maior10/1', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero >= 10) {
        return "numero maior que 10";
    } else {
        return "numero menor que 10";
    }
});

Route::get('clima/2', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero >= 30) {
        return "está quente";
    } else {
        return "está frio";
    }
});

Route::get('positivo/negativo/3', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return 'esse numero é positivo';
    } else if ($numero < 0) {
        return 'esse numero é negativo';
    } else {
        return 'esse numero é igual a 0';
    }
});

Route::get('dois-numeros/4', function (Request $request) {
    $numero1 = $request->input('valor');
    $Numero2 = $request->input('numero');
    if ($numero1 > $Numero2) {
    } else {
        return $Numero2;
    }
});

Route::get('exercicio5', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 3 == 0) {
        return 'é divisivel';;
    } else {
        return 'Não é divisivel';
    }
});

//exercicios valendo 2 para a prova 22/03.

Route::get('exercicio1', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero >= 10) {
        return "numero maior que 10";
    } else {
        return "numero menor que 10";
    }
});

Route::get('exercicio/2', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 0) {
        return 'esse numero é positivo';
    } else if ($numero < 0) {
        return 'esse numero é negativo';
    } else {
        return 'esse numero é igual a 0';
    }
});

Route::get('exercicio/3', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade >= 18) {
        return "maior de idade";
    } else {
        return "menor de idade";
    }
});

Route::get('exercicio/4', function (Request $request) {
    $numeros = $request->input('numero');
    if ($numeros % 2 == 0) {
        return 'par';
    } else {
        return 'impar';
    }
});

Route::get('exercicio/5', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 > $numero2) {
        return 'o numero maior é' . $numero1;
    } else {
        return 'o numero maior é'  . $numero2;
    }
});

Route::get('exercicio/6', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 9 == 0) {
        return 'é divisivel';;
    } else {
        return 'Não é divisivel';
    }
});

Route::get('exercicio/7', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero >= 30) {
        return "está quente";
    } else {
        return "está frio";
    }
});

Route::get('exercicio/8', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 7 == 0) {
        return 'é múltiplo por 7';
    } else {
        return 'Não é múltiplo por 7';
    }
});

Route::get('exercicio/9', function (Request $request) {
    $idade = $request->input('idade');
    if ($idade <= 12) {
        return "Você é uma criança";
    } else {
    }
});

Route::get('exercicio/10', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero %  3 == 0) {
        return 'possitívo e ímpar';
    }
});

Route::get('exercicio/11', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero > 100) {
        return 'esse numero é maior que 100';
    } else if ($numero < 100) {
        return 'esse numero é menor que 100';
    } else {
        return 'esse numero é igual a 0';
    }
});

Route::get('exercicio/12', function (Request $request) {
    $numero = $request->input('numero');
    if ($numero % 6 == 0) {
        return 'é divisivel por 6';;
    } else {
        return 'Não é divisivel por 6';
    }
});

Route::get('exercicio/13', function (Request $request) {
    $nome = $request->input('nome');
    if ($nome == 'Alice')
        return 'olá alice';
});

Route::get('exercicio/14', function (Request $request) {
    $idade = $request->input('idade');
    $carteira = $request->input('carteira');
    $carteira = $request->input('carteira');
    if ($idade >= 18 . $carteira = 'SIM') {
        return 'pode dirigir';
    } else if ($idade <= 18 . $carteira = 'NÃO') {
        return 'não pode dirigir';
    }
});

Route::get('exercicio/16', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 < $numero2) {
        return 'maior' . $numero1;
    } else {
        return 'menor'  . $numero2;
    }
});

Route::get('exercicio/17', function (Request $request) {
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    if ($idade >= 18) {
        return ' Você é maior de idade ' . $nome;
    } else {
        return ' Você é menor de idade ' . $nome;
    }
});

Route::get('exercicio/18', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    if ($numero1 == 0) {
        return "não é possivel efetuar a divisão pois o primeiro número é zero";
    } else if ($numero2 == 0) {
        return 'não é possivel efetuar a divisão pois o segundo número é zero';
    } else {
        $resulatdo = $numero1 / $numero2;
        return $numero1 . "/" . $numero2 . "=" . $resulatdo;
    }
});

Route::get('exercicio/19', function (Request $request) {
    $numero1 = $request->input('numero1');
    $numero2 = $request->input('numero2');
    $resulatdo = $numero1 * $numero2;
    if ($resulatdo > 100) {
        return 'resultado maior que 100';
    } else if ($resulatdo < 100) {
        return 'resultado menor que 100';
    }
});

Route::get('exercicio/20', function (Request $request) {
    $primeiroNumero = $request->input('numero1');
    $segundoNumero = $request->input('numero2');
    $resultado = $primeiroNumero + $segundoNumero;
    if ($resultado % 2 == 0) {
        $multiplica = $primeiroNumero * $segundoNumero;
        return $primeiroNumero . 'x' . $segundoNumero . '=' . $multiplica;
    } else {
        $dividir = $primeiroNumero % $segundoNumero;
        return $primeiroNumero . '/' . $segundoNumero . '=' . $dividir;
    }
});

// 6 exercicios do dia 03/04/2024

Route::get('exercicio/1', function (request $request) {
    $nota1 = $request->input('nota1');
    $nota2 = $request->input('nota2');
    $nota3 = $request->input('nota3');
    $resultado = ($nota1 + $nota2 + $nota3) / 3;
    if ($resultado >= 7) {
        return "aluno aprovado";
    } else if ($resultado < 7) {
        return "aluno reprovado";
    }
});

Route::get('exercicio->3', function (Request $request) {
    $ano = $request->input('ano');
    if ($ano % 4 == 0) {
        return 'É ano bissexto';
    } else {
        return 'Não é ano bissexto';
    }
});

Route::get('exercicio->5', function (Request $request) {
    $peso = $request->input('peso');
    $altura = $request->input('altura');
    $resultado = $peso / ($altura * $altura);

    if ($resultado < 18.5) {
        return 'Abaixo do peso';
    }

    if ($resultado >= 18.5) {
        if ($resultado < 25) {
            return 'peso adequado';
        }
    }

    if ($resultado >= 25) {
        if ($resultado < 30) {
            return 'sobrepeso!';
        }
    }

    if ($resultado >= 30) {
        return 'obesidade';
    }
});

Route::get('exercicio->2', function (Request $request) {
    $renda = $request->input('renda');
    if ($renda < 1900) {
    }
    return 'isento de imposto';
    if ($renda >= 1901) {
        if ($renda <= 2800) {
            $calculo1 = $renda * 7;
            $calculo2 = $calculo1 / 100;
            return $calculo2;
        }
    }

    if ($renda >= 2801) {
        if ($renda <= 3700) {
            $calculo3 = $renda * 15;
            $calculo4 = $calculo3 / 100;
            return $calculo4;
        }
    }

    if ($renda >= 3701) { {
            $calculo5 = $renda * 22;
            $calculo6 = $calculo5 / 100;
            return $calculo6;
        }
    }
});

Route::get('exercicio->4', function (Request $request) {
    $produto = $request->input('produto');

        if ($produto > 1000) {
            $calculo1 = $produto * 15;
            $calculo2 = $calculo1 / 100;
            return $calculo2;
        }
    
});

Route::get('exercicio->6', function (Request $request){
$valor = $request->input('valor');
$codigo = $request->input('codigo');
if ($codigo == 1){
    $aumento = ($valor * 5) / 100;
    return 'o aumento salarial para o operário é de' . $aumento . 'reais';
}

if ($codigo == 2){
    $aumento2 = ($valor * 10) / 100;
    return 'o aumento salarial para o tecnico é de' . $aumento2 . 'reais';
}

if ($codigo == 3) {
    $aumento3 = ($valor * 15) / 100;
    return 'o aumento salarial para o tecnico é de' . $aumento3 . 'reais';
}

if ($codigo == 4) {
    $aumento4 = ($valor * 20) / 100;
    return 'o aumento salarial para o tecnico é de' . $aumento4 . 'reais';
}
});