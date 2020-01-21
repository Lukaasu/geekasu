<?php
$id = $_GET['CODIGO'];


require_once 'cabecalho.php';
require_once 'classes\Funcionario.php';
$funcionario = new Funcionario();
$linha = $funcionario->listar1Categoria($id);

?>

<h2>Alterar Categoria</h2>
<form name="alterar-funcionario" action="funcionarios-editar-post.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
Descrição:
<input name="funcionario" value="<?php echo $linha['funcionario'];?>">
<input name="funcao" value="<?php echo $linha['funcao'];?>">
<button type="submit">Salvar</button>
<?php
require_once 'rodape.php';
?>