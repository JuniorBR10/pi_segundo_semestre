<?php
/*iniciar a sessão e pegar os cookies da mesma*/
session_start();
    $GLOBALS['logado'] = false;
    $nome_user = $_SESSION['nome_user'];
    $senha_user = $_SESSION['senha_user'];
    $nome = $_SESSION['nome'];
    
//query para o banco
    include 'conecta_mysql.php';
    $busca = mysqli_query($con, "SELECT senha FROM pessoa WHERE login = '{$nome_user}'");
    $linha_usuario = mysqli_num_rows($busca);
    $dado = mysqli_fetch_array($busca);
    
    /*se estiver tudo ok a variavel global(logado) recebe verdadeiro, senao recebe falso*/
    if(!(empty($nome_user) || empty($senha_user))){
        if($dado['senha'] == $senha_user){
            $GLOBALS['logado'] = true;
        }
        else{
            $GLOBALS['logado'] = false;
        }
    }
?>