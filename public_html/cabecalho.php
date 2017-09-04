<?php
    @include "valida_login.php";
	$msg = 0;
    @$msg = $_GET['msg'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Piano de Ouvido - Aprenda piano e teclado de uma forma diferente!</title>
        <meta charset="UTF-8">
        <!--O meta a seguir é para confirmar e vincular o site com o canal no youtube-->
        <meta name="google-site-verification" content="ngxnJh_EW4seX2G1KpYw_cMBOeBepehMSBiz-2uaQlE" >
        <link rel="stylesheet" type="text/css" href="_css/principal.css">
        <link rel="stylesheet" type="text/css" href="_css/<?=$css?>">
        
    </head>
    <body>
    <div id="interface">
        
        <header id="cabecalho">
            <img id="texto" src="_projeto_galeria/logo-pronto.png">
            <p id="title">uma maneira diferente para aprender a tocar</p>
            
            <?php if($GLOBALS['logado'] == true) { ?>
            <ul id="login_cadastro">
                <li id="sair" ><a href="logout.php">Sair</a></li> 
                <li id="bem_vindo">Bem vindo <?=$nome ?> &nbsp;&nbsp;&nbsp;|</li> 
            </ul>
            <?php } else { ?>
            <ul id="login_cadastro">
                <li id="cadastro"><a href="index.php?p=cadastro">Cadastre-se</a></li>
                <li id="login" ><a href="index.php?p=login">Login</a></li>  
            </ul>
            
            <?php } ?>
        
            <nav id="menu">
            <ul>
                <li><a id="menu_inicio" href="index.php?p=home">Início</a></li>
                <li><a id="menu_aulas" href="index.php?p=aulas">Aulas</a></li>
                <li><a id="menu_instrumento" href="index.php?p=instrumento">O Instrumento</a></li>
                <li><a id="menu_contato" href="index.php?p=contato">Contato</a></li>
            </ul>
            </nav>
        </header>