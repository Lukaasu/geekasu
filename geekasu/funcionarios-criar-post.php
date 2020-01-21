<?php
require_once 'classes/Funcionario.php';

$funcionario = new Funcionario();


$campo_do_formulario_Funcionario = $_POST['funcionario'];
$campo_do_formulario_Funcao = $_POST['funcao'];

$funcionario->inserir($campo_do_formulario_Funcionario, $campo_do_formulario_Funcao);

header('Location:funcionarios.php')




?>