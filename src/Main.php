<?php 

require_once 'classes/Sistema.php';

    $data=[ "Bob, bob@xyzzzzzz.com, Rua 12 de Abril, +5500000000000, 40GB","Alice, alice@xyzzzzzz.com, Rua Brasil, +5500111111111, 10GB"];

    $SistemaUsuarios = new Sistema();

    foreach ($data as $linhaDados){
        $SistemaUsuarios->addUsuario($linhaDados);
    }