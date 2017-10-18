<?php 
    if(isset($_GET['pagina_anterior'])){
        $pagina_anterior = filter_input(INPUT_GET, 'pagina_anterior');
    }
    if(isset($_GET['login'])){
        $login = filter_input(INPUT_GET, 'login');
    }
?>
<div id="divisao_corpo_cabecalho"></div>
	<h1>Faça login para ter acesso ao material didático</h1>
	<section id="corpo_principal">
		<?php   
			switch ($msg){
				case "user_vazio":
                                    $erro_login = "Nome de Usuário vazio ou com espaço em branco!";
                                    $class_login = "input_erro";
                                break;
				case "user_noexiste":
                                    $erro_login = "Usuário não cadastrado!";
                                    $class_login = "input_erro";
                                break;
				case "senha_invalido":
                                    $erro_senha = "Senha vazia ou com espaços em branco!";
                                    $class_senha = "input_erro";
                                break;
				case "senha_incorreta":
                                    $erro_senha = "A senha está incorreta!";
                                    $class_senha = "input_erro";
                                break;
			}
		?>
		<form action="logar.php?pagina_anterior=<?=$pagina_anterior?>" method="post">
                    <label>Usuário <br><span class="span_erro"><?=@$erro_login?></span><input class="<?=@$class_login?>" type="text" name="nome_user" placeholder="Nome de Usuário" required value="<?=@$login?>"></label><br>
                    <label>Senha<br><span class="span_erro"><?=@$erro_senha?></span><input class="<?=@$class_senha?>" type="password" name="senha_user" placeholder="**********" required></label><br>
                    <button type="submit">Entrar</button>
		</form>
	</section>