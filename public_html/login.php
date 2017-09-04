<div id="divisao_corpo_cabecalho"></div>
	<h1>Faça login para ter acesso ao material didático</h1>
	<section id="corpo_principal">
		<?php   
			switch ($msg){
				case "user_vazio":
					echo "<span id='erro'>Nome de Usuário vazio ou com espaço em branco!</span>";
					break;
				case "user_noexiste":
					echo "<span id='erro'>Usuário não cadastrado!</span>";
					break;
				case "senha_invalido":
					echo "<span id='erro'>Senha vazia ou com espaços em branco!</span>";
					break;
				case "senha_incorreta":
					echo "<span id='erro'>A senha está incorreta!</span>";
					break;
			}
		?>
		<form action="logar.php" method="post">
			<label>Usuário<br><input type="text" name="nome_user" placeholder="Nome de Usuário" required></label><br>
			<label>Senha<br><input type="password" name="senha_user" placeholder="**********" required></label><br>
			<button type="submit">Entrar</button>
		</form>
	</section>