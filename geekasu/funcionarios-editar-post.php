<?php

require_once 'classes\Funcionario.php';

$id = $_POST['id'];
$funcionario_nome = $_POST['funcionario'];
$funcao = $_POST['funcao'];
$funcionario = new Funcionario();
$funcionario->alterar($id, $funcionario_nome, $funcao);


//echo $id . " - " . $funcionario . " - " . $funcao . " - ";

header('Location:funcionarios.php')

?>