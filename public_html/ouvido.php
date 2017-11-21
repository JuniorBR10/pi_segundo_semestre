<h1>Ferramenta para você treinar sua percepção das notas</h1><br>
<?php if($GLOBALS['logado'] == true) { ?>
<p id="texto_audio">Clique no botão Iniciar para começar.</p><br>
<div id="principal_ouvido">
    <div onclick="verificaAcerto(1);" id="nota1" class="nota_musical">
        <p>Dó</p>
    </div>
    <div onclick="verificaAcerto(2);" id="nota2" class="nota_musical">
        <p>Ré</p>
    </div>
    <div onclick="verificaAcerto(3);" id="nota3" class="nota_musical">
        <p>Mi</p>
    </div>
    <div onclick="verificaAcerto(4);" id="nota4" class="nota_musical">
        <p>Fá</p>
    </div>
    <div onclick="verificaAcerto(5);" id="nota5" class="nota_musical">
        <p>Sol</p>
    </div>
    <div onclick="verificaAcerto(6);" id="nota6" class="nota_musical">
        <p>Lá</p>
    </div>
    <div onclick="verificaAcerto(7);" id="nota7" class="nota_musical">
        <p>Si</p>
    </div>
    <div onclick="verificaAcerto(8);" id="nota8" class="nota_musical">
        <p>Dó</p>
    </div>
</div><br>
<div id="botoes">
    <button id="iniciar" onclick="comeca();">Iniciar</button>
    <button id="ouvir_novamente" onclick="ouvirDenovo();">Ouvir Denovo</button>
</div>
<script src="_js/ferramenta.js" type="text/javascript"></script>
<?php } else { ?>
<div id="msg">
    <span id="msg">
        Faça <a href="index.php?p=login&pagina_anterior=<?=$pagina_atual?>">login</a> para ter acesso à ferramenta.
    </span><br><br>
    
    <span id="msg2">
        Não possui uma conta? <a href="index.php?p=cadastro&pagina_anterior=<?=$pagina_atual?>">Clique aqui</a> para realizar o cadastro.
    </span>
</div>
<?php } ?>