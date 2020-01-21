<?php require_once 'cabecalho.php';
//session_start();

require_once 'classes/Produtos.php';
$produtos = new Produtos();
$lista = $produtos->listar();

?>

<h2>Produtos</h2>
<?php if($_SESSION['tipo']==1){ ?>
<a href="produtos-criar.php" class="btn btn-info">Criar Novo Produto</a>
<?php } ?>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Editora</th>
        <th>Volume</th>
        <th>Distribuidora</th>
        <th>Categoria</th>
        <th class="acao">Editar</th>
        <th class="acao">Excluir</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($lista as $linha){ ?>
    <tr>
        <td><?php echo $linha['id'];?></td>
        <td><?php echo $linha['produto'];?></td>
        <td><?php echo $linha['preco'];?></td>
        <td><?php echo $linha['quantidade'];?></td>
        <td><?php echo $linha['editora'];?></td>
        <td><?php echo $linha['volume'];?></td>
        <td><?php echo $linha['distribuidora'];?></td>
        <td><?php echo $linha['categoria'];?></td>
        <td>
        <?php if($_SESSION['tipo']==1){ ?>
            <a href="produtos-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info"> Alterar</a>
            <a href="produtos-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a>
         </td>
    </tr>
    <?php } ?>
    <?php } ?>
    </tbody>
</table>
<?php require_once 'rodape.php' ?>
