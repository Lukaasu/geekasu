<?php

require_once 'cabecalho.php';
require_once 'classes/Usuario.php';

$usuarios = new Usuario();
$lista = $usuarios->listar();

?>

<h2>Clientes<h2>
<a href="usuarios-criar.php" class="btn btn-success">Novo Usuário</a>

<table class="table">
    <thead>
        <th>Id</th>
        <th>Usuario</th>
        <th>CPF</th>
        <th>Senha</th>
        <th>Tipo</th>
        <th>Açoes</th>
    </thead>
    <tbody>
        <?php foreach($lista as $linha){ ?>
        <tr>
            <td><?php echo $linha ['id']; ?></td>
            <td><?php echo $linha ['usuario']; ?></td>
            <td><?php echo $linha ['cpf']; ?></td>
            <td><?php echo $linha ['senha']; ?></td>
            <td><?php echo $linha ['tipo']; ?></td>

            <td>
            <a href="usuarios-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Alterar</a>
            <a href="usuarios-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php

require_once 'rodape.php';

?>