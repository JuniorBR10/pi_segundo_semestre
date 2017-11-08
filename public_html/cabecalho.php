<?php
    @include "valida_login.php";
	$msg = 0;
    @$msg = $_GET['msg'];
    if($pagina_atual == "home" || (strstr($pagina_atual,"aula")) != false && $pagina_atual != "aulas"){
        $atributes_body = "onload='arruma_video()' onresize='arruma_video()'";
    }
    else{
        $atributes_body = "";
    }
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
        <script src="_js/biblioteca.js" type="text/javascript"></script>
        
    </head>
    <body <?=$atributes_body?>>
    <div id="interface">
        
        <header id="cabecalho">
            <img id="texto" src="_projeto_galeria/logo-pronto.png">
            <div id="div_login_cadastro">
            <?php if($GLOBALS['logado'] == true) { ?>
            <ul id="login_cadastro">
                <li id="sair" ><a href="logout.php?pagina_anterior=<?=$pagina_atual?>">Sair</a></li> 
                <li id="bem_vindo" class="sc1100">Bem vindo <?=$nome ?> &nbsp;&nbsp;&nbsp;|</li> 
            </ul>
            <?php } else { ?>
            <ul id="login_cadastro">
                <li id="cadastro"><a href="index.php?p=cadastro&pagina_anterior=<?=$pagina_atual?>">Cadastre-se</a></li>
                <li id="login" ><a href="index.php?p=login&pagina_anterior=<?=$pagina_atual?>">Login</a></li>  
            </ul>
            
            <?php } ?>
            </div>
            <p class="nao_mobile" id="title">uma maneira diferente para aprender a tocar</p>
            
            <input type="checkbox" id="botao_menu">
            <label onselectstart="return false" for="botao_menu">&#9776;</label>
            <nav id="menu">
            <ul>
                <a id="menu_inicio" href="index.php?p=home"><li>Início</li></a>
                <a id="menu_aulas" href="index.php?p=aulas"><li>Aulas</li></a>
                <a id="menu_ouvido" href="index.php?p=ouvido"><li>Treine Seu Ouvido</li></a>
                <a id="menu_instrumento" href="index.php?p=instrumento"><li>O Instrumento</li></a>
                <a id="menu_contato" href="index.php?p=contato"><li>Contato</li></a>
            </ul>
            </nav>
        </header>