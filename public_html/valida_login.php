<?php
/*iniciar a sessão e pegar os cookies da mesma*/
session_start();
    $GLOBALS['logado'] = false;
    $nome_user = $_SESSION['nome_user'];
    $senha_user = $_SESSION['senha_user'];
    $nome = $_SESSION['nome'];
    
/*incluir o arquivo de login com os usuarios*/    
    include "../logins.php";
    /*se estiver tudo ok a variavel global(logado) recebe verdadeiro, senao recebe falso*/
    if(!(empty($nome_user) || empty($senha_user))){
        if($usuario[$nome_user."_senha"] == $senha_user){
            $GLOBALS['logado'] = true;
        }
        else{
            $GLOBALS['logado'] = false;
        }
    }
?>