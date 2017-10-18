<?php
/*pegar as variaveis que o usuário digitou*/
$login = filter_input(INPUT_POST,'nome_user');
$senha = filter_input(INPUT_POST,'senha_user');
$senhamd5 = md5($senha);
$pagina_anterior = filter_input(INPUT_GET, 'pagina_anterior');
//query para o banco
include 'conecta_mysql.php';
$busca = mysqli_query($con, "SELECT login, senha, nome FROM pessoa WHERE login = '{$login}'");
$linha_usuario = mysqli_num_rows($busca);
$dado = mysqli_fetch_array($busca);
/*verificar as informações*/
if($linha_usuario == 0){
    header("location:index.php?p=login&msg=user_noexiste&pagina_anterior=$pagina_anterior");
    die();
}
elseif(empty($login) || strstr($login, " ")){
    header("location:index.php?p=login&msg=user_vazio&pagina_anterior=$pagina_anterior");
    die();     
}
elseif(empty ($senha) || strstr($senha, " ")) {
    header("location:index.php?p=login&msg=senha_invalido&pagina_anterior=$pagina_anterior&login=$login");
    die();
}    
elseif($senhamd5 != $dado['senha']){
    header("location:index.php?p=login&msg=senha_incorreta&pagina_anterior=$pagina_anterior&login=$login");
    die();
}
else{
    /*se tudo estiver ok, criar a sessão e os cookies usuario,senha e nome*/
    session_start();
    $_SESSION['nome_user'] = $login;
    $_SESSION['senha_user'] = $senhamd5;
    $_SESSION['nome'] = $dado['nome'];
    header("location:index.php?p=$pagina_anterior");
    die();
}
?>
