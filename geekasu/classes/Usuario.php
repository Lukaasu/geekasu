<?php

class Usuario{

    /*atributos*/ 
    public $id;
    public $usuario;
    public $cpf;
    public $senha;

    /*métodos*/
    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query = "SELECT id, usuario, cpf, senha, tipo FROM tb_usuarios";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Usuario($id){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query = "SELECT id, usuario, cpf, senha, tipo FROM tb_usuarios WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchALL();
        foreach($lista as $linha){
            return $linha;
        } 

    }

    public function alterar($id, $usuario, $cpf, $senha, $tipo){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query="UPDATE tb_usuarios SET usuario = '".$usuario."', cpf = '".$cpf."', senha = '".$senha."', tipo = '".$tipo."' WHERE id = " . $id;

    
        $conexao->exec($query);




    }

    public function inserir($usuario, $cpf, $senha, $tipo){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query="INSERT INTO tb_usuarios(usuario, cpf, senha, tipo) values ('".$usuario."', '".$cpf."', '".$senha."', '".$tipo."')"; 
        
        
        $conexao ->exec($query);


      

    }

    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query="DELETE FROM tb_usuarios WHERE id = " . $id;
        
        $conexao ->exec($query);

    }

    public function validarLogin($usuario, $senha){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query = "SELECT * FROM tb_usuarios WHERE usuario = '".$usuario."' AND senha = '".$senha."'";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $um){
            return $um;
        }
    }
}
