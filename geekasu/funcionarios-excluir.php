Arquivo excluido.

<?php

echo $_GET['CODIGO'];
$id = $_GET["CODIGO"];

require_once 'classes/Funcionario.php';
$funcionario = new Funcionario();
$funcionario->excluir($id);

header('Location:funcionarios.php');

?>