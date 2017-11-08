<?php
	if(isset($_GET['p'])){
            $pagina_atual = $_GET['p'];
	}
        else{
            $pagina_atual = "home";
        }
	$p = array(
		"home" => array(
			"menu" => "Início",
			"url" => "home.php",
			"css" => "home.css"
		),
		"aulas" => array(
			"menu" => "Aulas",
			"url" => "aulas.php",
			"css" => "aulas.css"
		),
		"instrumento" => array(
			"menu" => "O Instrumento",
			"url" => "instrumento.php",
			"css" => "instrumento.css"
		),
                "ouvido" => array(
			"menu" => "Treine Seu Ouvido",
			"url" => "ouvido.php",
			"css" => "ouvido.css"
		),
		"contato" => array(
			"menu" => "Contato",
			"url" => "contato.php",
			"css" => "contato.css"
		),
		"login" => array(
			"menu" => "Login",
			"url" => "login.php",
			"css" => "login.css"
		),
		"cadastro" => array(
			"menu" => "Cadastre-se",
			"url" => "cadastro.php",
			"css" => "cadastro.css"
		),
		"aula1" => array(
			"url" => "_aulas/aula1.php",
			"css" => "aulas.css"
		)
	);
        if(!isset($p[$pagina_atual])){
            $pagina_atual = "home";
        }
	$css = $p[$pagina_atual]["css"];
	$url = $p[$pagina_atual]["url"];
	
	include "cabecalho.php";
	include $url;
	include "rodape.php";
?>