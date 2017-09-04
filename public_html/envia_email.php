<?php
//pegar as variáveis e criar as necessárias
 $meu_email = "juniorluchini25@gmail.com";
 $name = $_POST['name'];
 $email = $_POST['email'];
 $mensagem = $_POST['mensagem'];
 $assunto = "Piano de Ouvido - $name";
 
 //validação das variáveis
 if(empty($name)){
     header("location:index.php?p=contato&msg=nome_invalido");
	 die();
 }
 if(strlen($email) < 6 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0){
     header("location:index.php?p=contato&msg=email_invalido");
	 die();
 }
 if(empty($mensagem)){
     header("location:index.php?p=contato&msg=msg_invalido");
	 die();
 }
  //texto que vem pra mim
 $meu_texto = "<strong>Nome: </strong> $name".
              "<br><strong>Email: </strong> $email".
              "<br><strong>Mensagem: </strong> $mensagem";
 
 //texto que vai pro usuraio
 $texto_user = "<strong>Obrigado pela mensagem, responderemos o mais breve possível!</strong><br><br>".$meu_texto;
 
 //cabeçalho
 $header = "Content-type : text/html; charset= utf-8 \n".
           "From: Antônio Marcos marcosjr@cpanel.projetointegrador.org";
 
 //envia pra mim e uma cópia para o usuário
  mail($email, $assunto, $texto_user, $header);
  mail($meu_email, $assunto, $meu_texto, $header);
  
 header("location:index.php?p=contato&msg=enviado");
?>
