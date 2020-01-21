<?php require_once 'cabecalho2.php' ?>

<h2 style = "text-align: center;">Faça o Login</h2>

<div class="container" style = " text-align: center; height: 170px; width: 600px;">
<br>
<form method = "post" action = "validar-login.php">
    <label for="usuario"><b>Usuário:</b></label>
    <input type="text" placeholder="Digite o seu usuário" name="usuario" required><br>

    <label for="senha"><b>Senha:</b></label>
    <input type="password" placeholder="Digite sua senha" name="senha" required>
    <br>
    <br>
    <button type="submit">Login</button>
    <a href="usuarios-criar.php">Criar Conta</a>
</form>
    <br>
    <br>

</div>

<?php require_once 'rodape.php' ?>