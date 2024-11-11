<?php 

// chamando o arquivo da classe Usuario
require_once "Usuario.factory.php";

Class Sistema{
    // criamos a instancia nula de sistema para garantir que apenas seja criado uma unica
    private static ?Sistema $instance = null;
    private array $usuarios = []; #array para armazenar os usuarios criados

    //criando o construct privado para garantir a instancia controlada da classe Sistema
    private function __construct() {}

    public static function CreateSystem(){

        //Verificaacao se o Sistema é unico
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

    // funcao de loop com os dados da variavel e a exibicao dos objetos Usuario e Linha
    public function exibirUsuarios(){
        $info = array_map(fn($usuario)=>$usuario->__tostring(), $this->usuarios);
        return implode("\n", $info);
    }
}