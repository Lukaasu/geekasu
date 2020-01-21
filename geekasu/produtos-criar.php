<?php require_once 'cabecalho.php';
header('Content-Type: text/html; charset=utf-8');

require_once 'classes/Distribuidora.php';

require_once 'classes/Categoria.php';


$distribuidora = new Distribuidora();
$lista = $distribuidora->listar();

$categoria = new Categoria();
$listaCtegoria = $categoria->listar();


?>
<h2>Criar Novo Produto</h2>
<form action="produtos-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input name="produto" type="text" class="form-control" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input name="preco" type="number" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input name="quantidade" type="number"  min="0" class="form-control" placeholder="Quantidade do Produto" required>

            <div class="form-group">
                <label for="editora">Editora</label>
                <input name="editora" type="text"  min="0" class="form-control" placeholder="Editora" required>

            <div class="form-group">
                <label for="volume">Volume</label>
                <input name="volume" type="number"  min="0" class="form-control" placeholder="Volume" required>
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
                <?php foreach($lista as $linha){ ?>
                    <option> <?php echo $linha ['empresa'];?></option>

                <?php } ?>
            </select><br><br>

            <label for="categoria">Categoria</label><br>
            <select name="categoria">
                <?php foreach($listaCtegoria as $linha){ ?>
                    <option> <?php echo $linha ['descricao'];?></option>

                <?php } ?>
            </select><br><br>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form><br>


<?php require_once 'rodape.php' ?>



