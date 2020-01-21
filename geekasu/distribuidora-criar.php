<?php require_once 'cabecalho.php';?>
<h2>Adicionar Distribuidora<h2>
<form name="nova-distribuidora" method="post" action="distribuidora-criar-post.php">
    Empresa:
    <input name="empresa" maxlength="30">
    <br><br>
    Telefone:
    <input name="telefone" maxlength="30">
    <br><br>
    E-mail:
    <input name="email" maxlength="30">
    <br><br>
    Endereço:
    <input name="endereco" maxlength="30">
    <br><br>
    <button type="submit">Salvar</button>
</form>

<?php require_once 'rodape.php'; ?>