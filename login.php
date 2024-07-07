<?php


$dicionario = [
    "nome" => ["yasmim", "guilherme", "jessica"],
    "senha" => ["1234", "5678", "0101"],
    "enviar" => true,
    "esqueceuSenha" => true
];

if(isset($_POST['enviar'])) { //isset é uma função que verifica se a variavel é null
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    foreach ($dicionario['nome'] as $indice => $ignore) {
        if ($dicionario['nome'][$indice] == $nome && $dicionario['senha'][$indice] == $senha ){
            echo "Bem vindo " . $dicionario['nome'][$indice];
            echo "<br>";
            echo "Aguarde os próximos passos...";
            die();
        }
    }
}

echo "Entrada não autorizada.";


// if $_POST["senha"] - verificar
//  $_POST["nome"] (campo que eu quero pegar)

// if esqueceu senhar for verdade
// fazer um dicionario de nomes (dicionario), fazer percorrer e verificar cadastro positivo
// simular bd