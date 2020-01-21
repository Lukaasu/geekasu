<?php
$id = $_GET['CODIGO'];


require_once 'cabecalho.php';
require_once 'classes\Distribuidora.php';
$distribuidora = new Distribuidora();
$linha = $distribuidora->listar1Distribuidora($id);

?>

<h2>Alterar Distribuidora</h2>
<form name="alterar-distribuidora" action="distribuidora-editar-post.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
Distribuidora:
<input name="empresa" value="<?php echo $linha['empresa'];?>">
Telefone:
<input name="telefone" value="<?php echo $linha['telefone'];?>">
E-mail:
<input name="email" value="<?php echo $linha['email'];?>">
Endereço:
<input name="endereco" value="<?php echo $linha['endereco'];?>">
<button type="submit">Salvar</button>
<?php
require_once 'rodape.php';
?>