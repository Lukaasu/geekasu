<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Geekasu</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Geekasu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Geekasu</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="produtos.php">Produtos</a></li>

                <!--<li><a href="funcionarios.php">Funcionarios</a></li>-->
                <?php if($_SESSION['tipo']==1){ ?>
                    <li><a href="distribuidora.php">Distribuidora</a></li>
                <?php } ?>
                <?php if($_SESSION['tipo']==1){ ?>
                <li><a href="usuarios.php">Usuários</a><li>
                <?php } ?>
               <!-- <li><a href="usuario-editar2.php">Alterar dados</a><li>-->
                <li><a href="login.php">Sair</a><li>

            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<div class="container">