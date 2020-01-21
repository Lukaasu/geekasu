<?php

require_once 'cabecalho.php';
require_once 'classes/Funcionario.php';

$funcionario = new Funcionario();
$listar = $funcionario->listar();

?>

<h2>Funcionarios<h2>
<a href="funcionarios-criar.php" class="btn btn-success">Novo Funcionario</a>

<table class="table">
    <thead>
        <th>Id</th>
        <th>Funcionario</th>
        <th>Função</th>
        <th>Açoes</th>
    </thead>
    <tbody>
        <?php foreach($listar as $linha){ ?>
        <tr>
            <td><?php echo $linha ['id']; ?></td>
            <td><?php echo $linha ['funcionario']; ?></td>
            <td><?php echo $linha ['funcao']; ?></td>

            <td>
            <a href="funcionarios-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
            <a href="funcionarios-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php

require_once 'rodape.php';

?>