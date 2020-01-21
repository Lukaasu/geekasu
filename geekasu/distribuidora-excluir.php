Arquivo excluido.

<?php

echo $_GET['CODIGO'];
$id_excluir = $_GET["CODIGO"];

require_once 'classes/Distribuidora.php';
$distribuidora = new Distribuidora();
$distribuidora->excluir($id_excluir);

header('Location:distribuidora.php');

?>