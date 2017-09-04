<?php 
    //pegar as variaveis
    $nome = $_POST['nome_user'];
    $email = $_POST['email_user'];
    $sexo = $_POST['sexo'];
    $user = $_POST['nick_user'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];
    
    //fazer uma array com os usuarios já cadastrados
    $usuarios = file_get_contents('../usuarios.txt');
    $array = explode(";.;", $usuarios);
    
    //fazer uma array para os emails já cadastrados
    $emails = file_get_contents('../emails.txt');
    $array_emails = explode(";.;", $emails);
    
    //verificar as variaveis que o usuario digitou
    if(empty($user) || strstr($user, " ")){
        header("location:index.php?p=cadastro&msg=usuario_vazio");
        die();     
    }
    elseif(in_array($user, $array)){
        header("location:index.php?p=cadastro&msg=usuario_existe");
        die();
    }
    elseif(empty($nome)){
        header("location:index.php?p=cadastro&msg=nome_vazio");
        die();
    }
    elseif(strlen($email) < 6 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0) {
        header("location:index.php?p=cadastro&msg=email_invalido");
        die();
    }
    elseif(in_array($email, $array_emails)){
        header("location:index.php?p=cadastro&msg=email_existe");
        die();
    }
    elseif(empty($sexo) ||($sexo != "M" && $sexo != "F")){
        header("location:index.php?p=cadastro&msg=sexo_invalido");
        die();
    }
    elseif(empty ($senha) || strstr($senha, " ")) {
        header("location:index.php?p=cadastro&msg=senha_invalido");
        die();
    }
    elseif($senha != $confirma_senha){
        header("location:index.php?p=cadastro&msg=senha_diferente");
        die();
    }
    /*se estiver tudo ok, salvar as informações*/
    else{
        /*arquivo apenas com nome de usuarios (para facilitar quando for analisar se o usuario ja esta cadastrado)*/
        
        $fp_users = fopen("../usuarios.txt", "a+");
        fwrite($fp_users, $user.";.;");
        fclose($fp_users);
        
        /*arquivo apenas com os emails dos usuarios (para facilitar quando for analisar se o email ja esta cadastrado)*/
        
        $fp_emails = fopen("../emails.txt", "a+");
        fwrite($fp_emails, $email.";.;");
        fclose($fp_emails);
        
        /*gravar todas as informações do usuario, e quando migrar para o mysql estiver tudo organizado para trasaferir as informações*/
        
        $dados = "$nome, $email, $sexo, $user, $senha";
        $fp_banco = fopen("../banco_dados.txt", "a+");
        fwrite($fp_banco, "\n".$dados.";.;");
        fclose($fp_banco);
        
        /*fazer arrays com nome de usuario senha e nome verdadeiro, para facilitar a validação do login 
        e colocar a mensagem Bem-vindo (Nome), invez de Bem vindo (nome de usuário)*/
        
        $validar = "\n<?php ".'$usuario[' . "'$user" . "_senha'] = \"$senha\" ; \n " .
                    '$usuario['. "'$user"."_nome'] = \"$nome\" ;?>";
        $fp_logins = fopen("../logins.php", "a+");
        fwrite($fp_logins, $validar);
        fclose($fp_logins);
        header("location:index.php?p=cadastro&msg=sucesso");
    }
?>