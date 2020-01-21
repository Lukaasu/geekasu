<?php

require_once 'classes/Categoria.php';
$categoria = new Categoria();
$lista = $categoria->listar();

require_once 'cabecalho.php';


?>

<h2>Categorias</h2>
<?php if($_SESSION['tipo']==1){ ?>
<a href="categorias-criar.php" class="btn btn-success">Adicionar categoria</a>
<?php } ?>
<br>

<!--<select>
    <?php foreach($lista as $linha){ ?>
        <option value="<?php echo $linha['id'];?>"> <?php echo $linha ['descricao'];?></option>



    <?php } ?>
</select> -->

<table class="table">
    <thead>
        <th>Id</th>
        <th>Categoria</th>
        <?php if($_SESSION['tipo']==1){ ?>
        <th>Açoes</th>
        <?php } ?>
    </thead>
    <tbody>
    <?php foreach($lista as $linha){ ?>
    <tr>
        <td><?php echo $linha['id'];?></td>
        <td><?php echo $linha['descricao'];?></td>
        <td>
        <?php if($_SESSION['tipo']==1){ ?>
        
            <a href="categorias-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info"> Alterar</a>
            <a href="categorias-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
         </td>
         <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php


require_once 'rodape.php';


?>