<?php
require_once 'classes/Produtos.php';
header('Content-Type: text/html; charset=utf-8');

$produto = new Produtos();


$produto_formulario = $_POST['produto'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$editora = $_POST['editora'];
$volume = $_POST['volume'];
$distribuidora = $_POST['distribuidora'];

$produto->inserir($produto_formulario, $preco, $quantidade, $categoria, $editora, $volume, $distribuidora);

header('Location:produtos.php')




?>