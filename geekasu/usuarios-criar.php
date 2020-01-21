<?php require_once 'cabecalho2.php';?>
<h2>Usuarios<h2>
<form name="novo-usuario" method="post" action="usuarios-criar-post.php">
    Nome de usuario:
    <input name="usuario" maxlength="30"><br>
    CPF:
    <input name="cpf" maxlength="30"><br>
    Senha:
    <input name="senha" maxlength=30><br>
    
    <input name="tipo" maxlength=30 type="hidden"><br>
    <button type="submit">Salvar</button>
</form>

<?php require_once 'rodape.php'; ?>