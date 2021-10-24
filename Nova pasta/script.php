<?php

session_start();

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(strlen($nome )<=3){
    $_SESSION["mensagem de erro"]= "O nome deve conter pelo menos quatro letras!";
    header('location:index.php');
    return;
}else if(strlen($nome )>16){
    $_SESSION["mensagem de erro"]= "O nome deve conter no maximo 16 letras.";
    header('location:index.php');
    return;
}

if(strlen($idade )<1){
    $_SESSION["mensagem de erro"]= "A idade deve conter pelo menos um numero!";
    header('location:index.php');
    return;
}else if(strlen($idade )>2){
    $_SESSION["mensagem de erro"]= "A idade deve conter no maximo dois numeros!";
    header('location:index.php');
    return;
}


if($idade <6){
    $_SESSION["mensagem de erro"]= " $nome Não está apto a participar!";
    header('location:index.php');
    return;
}else if($idade >=6 && $idade <=12){
    $_SESSION["mensagem de erro"]= " $nome está na categoria Infantil!";
    header('location:index.php');
    return;
}else if($idade >=13 && $idade <=18){
    $_SESSION["mensagem de erro"]= " $nome está na categoria Adolescente!";
    header('location:index.php');
    return;
}else{
    $_SESSION["mensagem de erro"]= " $nome está na categoria Adulto!";
    header('location:index.php');
    return;
}





?>