<?php
session_start();
    require_once 'classes/Usuario.php';

    $usuario_login = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuario = new Usuario();
    $existe = $usuario->validarLogin($usuario_login, $senha);
    
    
    if(isset($existe)){
        $_SESSION['tipo']=$existe['tipo'];
        header('Location:login-sucesso.php');
    }else{
        header('Location:login-erro.php');
        
    }
?>