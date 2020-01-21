Arquivo excluido.

<?php

echo $_GET['CODIGO'];
$id = $_GET["CODIGO"];

require_once 'classes/Usuario.php';
$usuario = new Usuario();
$usuario->excluir($id);

header('Location:usuarios.php');

?>