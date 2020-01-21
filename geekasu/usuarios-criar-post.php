<?php

require_once 'classes\Usuario.php';


$usuario_formulario = $_POST['usuario'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];
$usuario = new Usuario();
$usuario->inserir($usuario_formulario, $cpf, $senha, $tipo);


echo " - " . $usuario_formulario . " - " . $cpf . " - " .$senha. " - " .$tipo. " - ";

header('Location:sucesso.php')

?>