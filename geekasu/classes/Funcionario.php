<?php

class Funcionario{

    /*atributos*/ 
    public $id;
    public $funcionario;
    public $funcao;

    /*métodos*/
    public function listar(){
        $query = "SELECT id, funcionario, funcao FROM tb_funcionarios";
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query = "SELECT id, funcionario, funcao FROM tb_funcionarios WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchALL();
        foreach($lista as $linha){
            return $linha;
        } 

    }

    public function inserir($funcionario, $funcao){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query="INSERT INTO tb_funcionarios(funcionario, funcao) values ('".$funcionario."', '".$funcao."')";
        
        $conexao->exec($query);
      

    }

    public function alterar($id, $funcionario, $funcao){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query="UPDATE tb_funcionarios SET funcionario = '".$funcionario."', funcao = '".$funcao."' WHERE id = " . $id;
        $conexao->exec($query);



    }

    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query = "DELETE FROM tb_funcionarios WHERE id = " . $id;

        $conexao->exec($query);

    }


}

