<?php require_once 'cabecalho.php';?>
<h2>Adicionar funcionario<h2>
<form name="novo-funcionario" method="post" action="funcionarios-criar-post.php">
    Nome do Funcionario:
    <input name="funcionario" maxlength="30"><br>
    Função
    <input name="funcao" maxlength=30>
    <br>
    <button type="submit">Salvar</button>
</form>

<?php require_once 'rodape.php'; ?>