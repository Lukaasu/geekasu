<?php require_once 'cabecalho.php';


require_once 'classes/Produtos.php';
$id = $_GET ['CODIGO'];
$produto = new Produtos();
$lista = $produto->listar1Produto($id);

require_once 'classes/Categoria.php';
$categoria = new Categoria();
$lista_Categoria = $categoria->listar();

require_once 'classes/Distribuidora.php';
$distribuidora = new Distribuidora();
$lista_Distribuidora = $distribuidora->listar();

?>
<h2>Alterar Produto</h2>
<form action="produtos-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input name="produto" type="text" class="form-control" placeholder="Nome do Produto" required value="<?php echo $lista['produto'];?>">
                
            </div>
            <input name="id" type="hidden" value="<?php echo $id ?>">

            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input name="preco" type="number" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required value="<?php echo $lista['preco'];?>">
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input name="quantidade" type="number"  min="0" class="form-control" placeholder="Quantidade do Produto" required value="<?php echo $lista['quantidade'];?>">

            <div class="form-group">
                <label for="editora">Editora</label>
                <input name="editora" type="text"  min="0" class="form-control" placeholder="editora" required value="<?php echo $lista['editora'];?>">

            <div class="form-group">
                <label for="volume">Volume</label>
                <input name="volume" type="number"  min="0" class="form-control" placeholder="volume" required value="<?php echo $lista['volume'];?>">
           <!-- </div>
            <div class="form-group">
                <label for="nome">Categoria do Produto</label>
                <select class="form-control">
                    <option value="1">Livros</option>
                    <option value="2">Revistas</option>
                </select>
            </div>-->
            <label for="distribuidora">Distribuidora</label><br>
            <select name="distribuidora">
                <?php foreach($lista_Distribuidora as $linha){ ?>
                    <option> <?php echo $linha ['empresa'];?></option>

                <?php } ?>
            </select><br><br>

            
            <label for="categoria">Categoria:</label><br>
            <select name="categoria">
                <?php foreach($lista_Categoria as $linha){ ?>
                <?php if($lista['categoria'] == $linha['descricao']){?>
                    <option selected> <?php echo $linha['descricao'];?></option>


                <?php }else{ ?>
                <option><?php echo $linha['descricao'];?></option>
                <?php } ?>
                <?php } ?>
            </select><br><br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form><br>

<?php require_once 'rodape.php' ?>


