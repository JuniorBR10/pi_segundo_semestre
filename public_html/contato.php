<div id="divisao_corpo_cabecalho"></div>
	<h1>Mande uma mensagem ao professor</h1>
	<section id="corpo_principal">
		
		<?php if($msg == "enviado"){ ?>
		<div id="msg_enviada">
		<span id="mensagem_enviada">A mensagem foi enviada com sucesso!</span>
		<p id="texto_obrigado">Obrigado por entrar em contato, você receberá um e-mail confirmando que sua mensagem foi enviada!</p>
		<a href="index.php?p=contato" id="voltar">Voltar</a>
		</div>
		
		<?php } else { ?>
		<div id="form_contato">
			<?php switch ($msg) {
				case "nome_invalido":
					echo "<span id='erro'>Nome é obrigatório!</span>";
					break;
				case "email_invalido":
					echo "<span id='erro'>E-mail Inválido!</span>";
					break;
				case "msg_invalido":
					echo "<span id='erro'>Mensagem Vazia!</span>";
					break;
			}
			?>
			<form action="envia_email.php" method="post">
				<label>Nome <br><input id="nome" type="text" required name="name" placeholder="Seu nome "></label><br>
				<label>E-mail <br><input id="email" type="email" required name="email" placeholder="Endereço de e-mail válido"></label><br>
				<label>Mensagem <br><textarea id="textao" name="mensagem" required placeholder="Aqui vai sua mensagem "></textarea></label>
				<button type="submit">Enviar</button>
			</form>
			
		</div>
		<aside id="antoniom">
			<img src="_projeto_galeria/Antonio-mjr.jpg" id="antoniom">
			<img src="_projeto_galeria/antoniomarcos.png" id="texto_antonio">
			<p class="descricao_antonio">Olá, tudo bem? Caso você tenha alguma dúvida, sugestão ou simplesmente queira falar comigo, sinta-se à vontade para me enviar uma mensagem.</p><p class="descricao_antonio"> Basta preencher o formulário a esquerda e clicar em enviar, a mensagem será respondida no e-mail que você preencheu.</p>
		</aside>
		<?php } ?>
	</section>