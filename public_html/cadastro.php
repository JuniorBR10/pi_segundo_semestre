<?php 
    if(isset($_GET['pagina_anterior'])){
        $pagina_anterior = filter_input(INPUT_GET, 'pagina_anterior');
    }
    if(isset($_GET['nome'])){
        $nome = filter_input(INPUT_GET, 'nome');
    }
    if(isset($_GET['login'])){
        $login = filter_input(INPUT_GET, 'login');
    }
    if(isset($_GET['email'])){
        $email = filter_input(INPUT_GET, 'email');
    }
    if(isset($_GET['sexo'])){
        $sexo = filter_input(INPUT_GET, 'sexo');
        if($sexo == 1){ $homem = "checked";}
        if($sexo == 0){ $mulher = "checked";}
    }
?>
<div id="divisao_corpo_cabecalho"></div>
	<h1>Faça o cadastro para ter acesso ao material didático</h1>
	<section id="corpo_principal">
            <?php if($msg != "sucesso"){
                switch ($msg){
                        case "usuario_vazio":
                            $erro_login = "Nome de Usuário Inválido!";
                            $class_login = "input_erro";
                        break;
                        case "usuario_existe":
                            $erro_login =  "Nome de Usuário já existe!";
                            $class_login = "input_erro";
                        break;
                        case "nome_vazio":
                            $erro_nome = "Nome Inválido!";
                            $class_nome = "input_erro";
                        break;
                        case "email_invalido":
                            $erro_email = "E-mail Inválido!";
                            $class_email = "input_erro";
                        break;
                        case "email_existe":
                            $erro_email = "E-mail já foi cadastrado!";
                            $class_email = "input_erro";
                        break;
                        case "sexo_invalido":
                            $erro_sexo = "Campo sexo é obrigatório!";
                            $class_sexo = "input_erro";
                        break;
                        case "senha_invalido":
                            $erro_senha = "Senha vazia ou com espaços em branco!";
                            $class_senha = "input_erro";
                        break;
                        case "senha_diferente":
                            $erro_senha = "As senhas não conferem!";
                            $class_senha = "input_erro";
                        break;
                    }
		?>
        <form action="cadastrar.php?pagina_anterior=<?=@$pagina_anterior?>&nome=<?=@$nome?>&login=<?=@$login?>&email=<?=@$email?>&sexo=<?=@$sexo?>" method="post">
            <label>
                Nome<br><span class="span_erro"><?=@$erro_nome?></span>
                <input class="<?=@$class_nome?>" type="text" name="nome_user" placeholder="Seu nome" required value="<?=@$nome?>">
            </label><br>
            
            <label>
                E-mail<br><span class="span_erro"><?=@$erro_email?></span>
                <input class="<?=@$class_email?>" type="email" name="email_user" placeholder="Endereço de e-mail válido" required value="<?=@$email?>">
            </label><br>
            
            <label>
                Sexo <span class="span_erro"><?=@$erro_sexo?></span>
            </label>
            <fieldset class="<?=@$class_sexo?>">
                <label class="sexo">
                    Masculino<input <?=@$homem?> required type="radio" name="sexo" value="1">
                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="sexo">
                    Feminino<input <?=@$mulher?> required type="radio" name="sexo" value="0">
                </label>
            </fieldset>

            <label>
                Nome de Usuário<br> <span class="span_erro"><?=@$erro_login?></span>
                <input class="<?=@$class_login?>" value="<?=@$login?>" type="text" name="nick_user" placeholder="Nome para fazer Login" required>
            </label><br>
            
            <label>
                Senha<br> <span class="span_erro"><?=@$erro_senha?></span>
                <input class="<?=@$class_senha?>" type="password" name="senha" placeholder="**********" required>
            </label><br>
            
            <label>
                Confirmar a Senha<br>
                <input class="<?=@$class_senha?>" type="password" name="confirma_senha" placeholder="**********" required>
            </label><br>
            
            <button type="submit">Cadastrar</button>
        </form>
        <?php } else { ?>
        <div id="cadastrado">
            <span id="cadastro_efetuado">Cadastro efetuado com sucesso!</span>
            <p id="texto_obrigado">Obrigado por se cadastrar em nosso site, agora você terá acesso a todo o material didático!<br><br> Clique no botão logar e efetue o login. </p>
            <a href="index.php?p=login&pagina_anterior=<?=$pagina_anterior?>" id="voltar">Logar</a>
        </div>

    <?php } ?>
</section>