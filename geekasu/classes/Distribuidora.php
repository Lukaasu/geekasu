<?php

class Distribuidora{

    /*atributos*/ 
    public $id;
    public $empresa;
    public $telefone;
    public $email;
    public $endereco;

    /*métodos*/
    public function listar(){
        $query = "SELECT id, empresa, telefone, email, endereco FROM tb_distribuidora";
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listarDistribuidora(){
        $query = "SELECT id, empresa, telefone, email, endereco FROM tb_distribuidora";
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Distribuidora($id){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query = "SELECT id, empresa, telefone, email, endereco FROM tb_distribuidora WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchALL();
        foreach($lista as $linha){
            return $linha;
        } 

    }

    public function inserir($empresa, $telefone, $email, $endereco){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query="INSERT INTO tb_distribuidora(empresa, telefone, email, endereco) values ('".$empresa."', '".$telefone."', '".$email."', '".$endereco."')";
        
        $conexao->exec($query);
      

    }

    public function alterar($id, $empresa, $telefone, $email, $endereco){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query="UPDATE tb_distribuidora SET empresa = '".$empresa."', telefone = '".$telefone."', email = '".$email."', endereco = '".$endereco."' WHERE id = " . $id;
        $conexao->exec($query);



    }

    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query = "DELETE FROM tb_distribuidora WHERE id = " . $id;

        $conexao->exec($query);

    }


}

