<div id="divisao_corpo_cabecalho"></div>
	<h1>Faça o cadastro para ter acesso ao material didático</h1>
	<section id="corpo_principal">
		<?php if($msg != "sucesso"){
				switch ($msg){
					case "usuario_vazio":
						echo "<span id='erro'>Nome de Usuário vazio ou com espaço em branco!</span>";
						break;
					case "usuario_existe":
						echo "<span id='erro'>Nome de Usuário já existe!</span>";
						break;
					case "nome_vazio":
						echo "<span id='erro'>Nome é obrigatório!</span>";
						break;
					case "email_invalido":
						echo "<span id='erro'>E-mail Inválido!</span>";
						break;
					case "email_existe":
						echo "<span id='erro'>E-mail já foi cadastrado!</span>";
						break;
					case "sexo_invalido":
						echo "<span id='erro'>Campo sexo é obrigatório!</span>";
						break;
					case "senha_invalido":
						echo "<span id='erro'>Senha vazia ou com espaços em branco!</span>";
						break;
					case "senha_diferente":
						echo "<span id='erro'>As senhas não conferem!</span>";
						break;
				}
		?>
		<form action="cadastrar.php" method="post">
			<label>Nome<br><input type="text" name="nome_user" placeholder="Seu nome" required></label><br>
			<label>E-mail<br><input type="email" name="email_user" placeholder="Endereço de e-mail válido" required></label><br>
			<label>Sexo</label>
			<fieldset>
				<label class="sexo">Masculino<input required type="radio" name="sexo" value="M"></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label class="sexo">Feminino<input required type="radio" name="sexo" value="F"></label>
			</fieldset>
			
			<label>Nome de Usuário<br><input type="text" name="nick_user" placeholder="Nome para fazer Login" required></label><br>
			<label>Senha<br><input type="password" name="senha" placeholder="**********" required></label><br>
			<label>Confirmar a Senha<br><input type="password" name="confirma_senha" placeholder="**********" required></label><br>
			<button type="submit">Cadastrar</button>
		</form>
		<?php } else { ?>
		<div id="cadastrado">
			<span id="cadastro_efetuado">Cadastro efetuado com sucesso!</span>
			<p id="texto_obrigado">Obrigado por se cadastrar em nosso site, agora você terá acesso a todo o material didático!<br><br> Clique no botão logar e efetue o login. </p>
			<a href="index.php?p=login" id="voltar">Logar</a>
		</div>
		
		<?php } ?>
	</section>