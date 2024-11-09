<?php 

require_once "Uuuario.php";

Class Sistema{
    private array $usuarios = [];

    public function addUsuario(string $data){
        list($nome, $email, $endereco, $numero, $plano) = explode(", ", $data);

        $linha = new Linha($numero, $plano);
        $suario = new Usuario($nome, $email, $endereco, $linha);

        $this->usuarios[]=$suario;
    }

    public function exibirUsuarios(){
        $info = array_map(fn($usuario)=>$usuario->__tostring(), $this->usuarios);
        return implode("\n", $info);
    }
}