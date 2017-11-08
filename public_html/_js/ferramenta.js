var nota_sorteada = "";
var pode_tocar = false;
var pode_tocar2 = true;
var acertos = -1;
var erros = -1;
function comeca(){
    if(acertos == -1){
        acertos = 0;
        erros = 0;
    }
    //sorteia uma nota
    nota_sorteada = Math.floor(Math.random() * 8 + 1);
    
    var audio = new Audio();
    audio.src = "_sons/"+nota_sorteada+".mp3";
    audio.play();
    
    var texto = document.getElementById("texto_audio");
    texto.innerHTML = "Clique sobre a nota que você ouviu.";
    
    pode_tocar = true;
    pode_tocar2 = true;
    if(acertos == 0 && erros == 0){
        var button = document.getElementById("iniciar");
        button.firstChild.nodeValue = "Parar";
        button.setAttribute("onclick", "para();")
    }
}
function ouvirDenovo(){
    var audio = new Audio();
    audio.src = "_sons/"+nota_sorteada+".mp3";
    audio.play();
}
function verificaAcerto(nota_user){
    if(acertos != -1 && erros != -1 && pode_tocar){
        var texto = document.getElementById("texto_audio");
        if(nota_user == nota_sorteada){
            texto.setAttribute("style" , "color:green;");
            texto.innerHTML = "Você acertou!";
            var y = setTimeout(function() {
                if(pode_tocar2){
                    comeca();
                    texto.setAttribute("style" , "color:black;");
                }
                clearTimeout(y);
            }, 2500);
            acertos++;
        }
        else{
            texto.setAttribute("style" , "color:red;");
            texto.innerHTML = "Você errou!";
            var y = setTimeout(function() {
                if(pode_tocar2){
                    comeca();
                    texto.setAttribute("style" , "color:black;");
                }
                clearTimeout(y);
            }, 2500);
            erros++;
        }
        pode_tocar = false;
    }
}
function para(){
    pode_tocar = false;
    pode_tocar2 = false;
    var button = document.getElementById("iniciar");
    button.firstChild.nodeValue = "Iniciar";
    button.setAttribute("onclick", "comeca();");
    var texto = document.getElementById("texto_audio");
    texto.setAttribute("style" , "color:black;");
    texto.innerHTML = "Você acertou <span style='color:green;'>"+acertos+"</span> e errou <span style='color:red;'>"+erros+"</span> <br><br> Clique no botão Iniciar para recomeçar.";
    nota_sorteada = "";
    acertos = -1;
    erros = -1;
    die();
}