<?php
/*pegar as variaveis que o usuário digitou*/
$user = $_POST['nome_user'];
$senha = $_POST['senha_user'];

/*incluir o arquivo que contem os usuarios cadastrados, suas respectivas senhas e seus nomes*/
include "../logins.php";
/*verificar as informações*/
if($usuario[$user."_senha"] == ""){
    header("location:index.php?p=login&msg=user_noexiste");
    die();
}
elseif(empty($user) || strstr($user, " ")){
    header("location:index.php?p=login&msg=user_vazio");
    die();     
}
elseif(empty ($senha) || strstr($senha, " ")) {
    header("location:index.php?p=login&msg=senha_invalido");
    die();
}    
elseif($usuario[$user."_senha"] != $senha){
    header("location:index.php?p=login&msg=senha_incorreta");
    die();
}
elseif($usuario[$user."_senha"] == $senha){
    /*se tudo estiver ok, criar a sessão e os cookies usuario,senha e nome*/
    session_start();
    $_SESSION['nome_user'] = $user;
    $_SESSION['senha_user'] = $senha;
    $_SESSION['nome'] = $usuario[$user."_nome"];
    header("location:index.php?=home");
    die();
}
?>
