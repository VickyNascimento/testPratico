<?php 

// chamando o arquivo da classe Usuario
require_once "Usuario.factory.php";

Class Sistema{
    // criamos a instancia nula de sistema para garantir que apenas seja criado uma unica
    private static ?Sistema $instance = null;
    private array $usuarios = []; #array para armazenar os usuarios criados

    private function __construct() {}

    public static function CreateSystem(){
        if(self::$instance===null){
            self::$instance = new Sistema();
        }
        return self::$instance;
    } 

    // cria os usuarios a partir da variavel dada
    public function addUsuario(string $data){
        $usuario = UsuarioFactory::criarUsuario($data);
        $this->usuarios[]= $usuario;
    }

    public function exibirUsuarios(){
        $info = array_map(fn($usuario)=>$usuario->__tostring(), $this->usuarios);
        return implode("\n", $info);
    }
}