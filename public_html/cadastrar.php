<?php 
    //pegar as variaveis
    $nome = filter_input(INPUT_POST, 'nome_user');
    $email = filter_input(INPUT_POST, 'email_user');
    $sexo = filter_input(INPUT_POST, 'sexo');
    $login = filter_input(INPUT_POST, 'nick_user');
    $senha = filter_input(INPUT_POST, 'senha');
    $confirma_senha = filter_input(INPUT_POST, 'confirma_senha');
    $pagina_anterior = filter_input(INPUT_GET, 'pagina_anterior');
    
    //verificar a variavel de login
    if(empty($login) || strstr($login, " ") || strlen($login) > 30){
        header("location:index.php?p=cadastro&msg=usuario_vazio&pagina_anterior=$pagina_anterior"
        . "&nome=$nome&email=$email&sexo=$sexo");
        die();     
    }
    
    //query para o banco
    include "conecta_mysql.php";
    $busca_usuario = mysqli_query($con, "SELECT * FROM pessoa WHERE login = '{$login}'");
    $linha_usuario = mysqli_num_rows($busca_usuario);
    //verificar se a variavel de login não exite no banco
    if($linha_usuario != 0){
        header("location:index.php?p=cadastro&msg=usuario_existe&pagina_anterior=$pagina_anterior"
        . "&nome=$nome&email=$email&sexo=$sexo");
        die();
    }
    //query para o banco
    $busca_email = mysqli_query($con, "SELECT * FROM pessoa WHERE email = '{$email}'");
    $linha_email = mysqli_num_rows($busca_email);
    //verificar se a variavel de email não exite no banco
    if($linha_email != 0){
        header("location:index.php?p=cadastro&msg=email_existe&pagina_anterior=$pagina_anterior"
        . "&nome=$nome&login=$login&sexo=$sexo");
        die();
    }
    
    //verificar as variaveis que o usuario digitou
    if(empty($nome) || strlen($nome) > 100 ){
        header("location:index.php?p=cadastro&msg=nome_vazio&pagina_anterior=$pagina_anterior"
        . "&login=$login&email=$email&sexo=$sexo");
        die();
    }
    elseif(strlen($email) < 6 || strlen($email) > 150 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0) {
        header("location:index.php?p=cadastro&msg=email_invalido&pagina_anterior=$pagina_anterior"
        . "&nome=$nome&login=$login&sexo=$sexo");
        die();
    }
    elseif($sexo != "1" && $sexo != "0"){
        header("location:index.php?p=cadastro&msg=sexo_invalido&pagina_anterior=$pagina_anterior"
        . "&nome=$nome&login=$login&email=$email");
        die();
    }
    elseif(empty ($senha) || strstr($senha, " ")) {
        header("location:index.php?p=cadastro&msg=senha_invalido&pagina_anterior=$pagina_anterior"
        . "&nome=$nome&login=$login&sexo=$sexo&email=$email");
        die();
    }
    elseif($senha != $confirma_senha){
        header("location:index.php?p=cadastro&msg=senha_diferente&pagina_anterior=$pagina_anterior"
        . "&nome=$nome&login=$login&sexo=$sexo&email=$email");
        die();
    }
    /*se estiver tudo ok, salvar as informações*/
    else{
        $senha = md5($senha);
        mysqli_query($con, "INSERT INTO pessoa VALUES (null, '{$login}', '{$senha}',
        '{$nome}', '{$email}', '{$sexo}')");
        header("location:index.php?p=cadastro&msg=sucesso&pagina_anterior=$pagina_anterior");
    }
    mysqli_close($con);
?>