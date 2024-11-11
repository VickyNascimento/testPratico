<?php 

// chama o arquivo da classe sistema
require_once 'classes\Sistema.php';

    $data=[ "Bob, bob@xyzzzzzz.com, Rua 12 de Abril, +5500000000000, 40GB","Alice, alice@xyzzzzzz.com, Rua Brasil, +5500111111111, 10GB"];

    // instancia um sistema unico para trazer os dados
    $SistemaUsuarios = Sistema::CreateSystem();

    // faz um loop pra inteirar cada linha da varivael e executar a funcao do objeto sistema
    foreach ($data as $linhaDados){
        // cria cada usuario a partir dos dados da variavel
        $SistemaUsuarios->addUsuario($linhaDados);
    };

    // exibe o conteudo requisitado no navegador
    echo $SistemaUsuarios->exibirUsuarios();