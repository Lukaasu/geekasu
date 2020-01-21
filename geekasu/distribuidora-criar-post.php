<?php

require_once 'classes\Distribuidora.php';
$distribuidora = new Distribuidora();

//$id = $_POST['id'];
$empresa = $_POST['empresa'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$distribuidora = new Distribuidora();
$distribuidora->inserir($empresa, $telefone, $email, $endereco);



header('Location:distribuidora.php')

?>