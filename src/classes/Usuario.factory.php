<?php 

require_once "Usuario.php";
require_once "Linha.php";


class UsuarioFactory {
    public static function criarUsuario(string $data){
        list($nome, $email, $endereco, $numero, $plano) = explode(", ", $data);

        // cria o objeto linha a partir dos dados da lista
        $linha = new Linha($numero, $plano);
        // cria o objeto usuario a partir dos dados da lista e do objeto linha
        return new Usuario($nome, $email, $endereco, $linha);
    }
}
