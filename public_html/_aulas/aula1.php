<div id="divisao_corpo_cabecalho"></div>
	<section id="corpo_principal">
		<h1>Aula 1 - Introdução ao piano</h1>
		<iframe id="video" width="820" height="520" src="https://www.youtube.com/embed/nTUuKV8MCm4" frameborder="0" allowfullscreen></iframe>
		<h1>Material didático</h1>
		<?php if($GLOBALS['logado'] == true) { ?>
		<table id="material">
			<tr>
				<td><a target="_blank" href="https://drive.google.com/drive/folders/0B9zm4jCrzBohWGM0b25kN1hCZnc?usp=sharing"><img src="_projeto_galeria/pdf-icon.png"></a></td>
				<td><a target="_blank" href="https://drive.google.com/drive/folders/0B9zm4jCrzBohMlhoNDNaZGRNN0E?usp=sharing"><img src="_projeto_galeria/mp3-icon.png"></a></td>
			</tr>
		</table>
		<?php } else { ?>
		<div id="msg">
			<span id="msg">Faça <a href="index.php?p=login&pagina_anterior=<?=$pagina_atual?>">login</a> para ter acesso ao material didático!</span><br><br>
			<span id="msg2">Não possui uma conta? <a href="index.php?p=cadastro&pagina_anterior=<?=$pagina_atual?>">Clique aqui</a> para realizar o cadastro.</span>
		</div>
		<?php } ?>
	</section>