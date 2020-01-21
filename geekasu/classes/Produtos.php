<?php

class Produtos{

    /*atributos*/ 
    public $id;
    public $produto;
    public $preco;
    public $quantidade;
    public $categoria;
    public $editora;
    public $volume;
    public $distribuidora;
    

    /*métodos*/
    public function listar(){
        $query = "SELECT id, produto, preco, quantidade, categoria, editora, volume, distribuidora FROM tb_produtos";
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function listar1Produto($id){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        $query = "SELECT id, produto, preco, quantidade, categoria, editora, volume, distribuidora FROM tb_produtos WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchALL();
        foreach($lista as $linha){
            return $linha;
        } 

    }

    public function inserir($produto, $preco, $quantidade, $categoria, $editora, $volume, $distribuidora){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query="INSERT INTO tb_produtos(produto, preco, quantidade, categoria, editora, volume, distribuidora) values ('".$produto."', '".$preco."', '".$quantidade."', '".$categoria."', '".$editora."', '".$volume."', '".$distribuidora."')";
        
        $conexao->exec($query);
      

    }

    public function alterar($id, $produto, $preco, $quantidade, $categoria, $editora, $volume, $distribuidora){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");
        echo $query="UPDATE tb_produtos SET produto = '".$produto."', preco = '".$preco."', quantidade ='".$quantidade."', categoria = '".$categoria."', editora = '".$editora."', volume = '".$volume."', distribuidora = '".$distribuidora."' WHERE id = " . $id;
       $conexao->exec($query);



    }

    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1; dbname=banco","root","");

        $query = "DELETE FROM tb_produtos WHERE id = " . $id;

        $conexao->exec($query);

    }


}

