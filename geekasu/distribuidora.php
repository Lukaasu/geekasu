<?php

require_once 'classes/Distribuidora.php';
$distribuidora = new Distribuidora();
$lista = $distribuidora->listar();

require_once 'cabecalho.php';


?>

<h2>Distribuidoras</h2>
<a href="distribuidora-criar.php" class="btn btn-success">Adicionar categoria</a>
<br>

<!--<select>
    <?php foreach($lista as $linha){ ?>
        <option value="<?php echo $linha['id'];?>"> <?php echo $linha ['empresa'];?></option>



    <?php } ?>
</select> -->

<table class="table">
    <thead>
        <th>Id</th>
        <th>Distribuidora</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Endereço</th>
        <th>Açoes</th>
    </thead>
    <tbody>
    <?php foreach($lista as $linha){ ?>
    <tr>
        <td><?php echo $linha['id'];?></td>
        <td><?php echo $linha['empresa'];?></td>
        <td><?php echo $linha['telefone'];?></td>
        <td><?php echo $linha['email'];?></td>
        <td><?php echo $linha['endereco'];?></td>
        <td>
            <a href="distribuidora-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info"> Alterar</a>
            <a href="distribuidora-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
         </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php


require_once 'rodape.php';


?>