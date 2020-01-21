<?php
$id = $_GET['CODIGO'];


require_once 'cabecalho.php';
require_once 'classes\Usuario.php';
$usuario = new Usuario();
$linha = $usuario->listar1Usuario($id);

?>

<h2>Alterar Usuário</h2>
<form name="alterar-usuarios" action="usuarios-editar-post.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
Usuário:
<input name="usuario" value="<?php echo $linha['usuario'];?>">
CPF:
<input name="cpf" value="<?php echo $linha['cpf'];?>">
Senha:
<input name="senha" value="<?php echo $linha['senha'];?>">

<input name="tipo" type="hidden" value="<?php echo $linha['tipo'];?>">
<button type="submit">Salvar</button>
<?php
require_once 'rodape.php';
?>