<?php

require_once 'classes\Usuario.php';

$id = $_POST['id'];
$usuario_nome = $_POST['usuario'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];
$usuario = new Usuario();
$usuario->alterar($id, $usuario_nome, $cpf, $senha, $tipo);


//echo $id . " - " . $funcionario . " - " . $funcao . " - ";

header('Location:usuarios.php')

?>