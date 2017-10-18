function arruma_video(){
    if(window.innerWidth <= 1350){
        document.getElementById("video").width = window.innerWidth * 0.8;
        document.getElementById("video").height = (window.innerWidth * 0.8)-(window.innerWidth * 0.4);
    }
    else{
        document.getElementById("video").width = window.outerWidth * 0.8;
        document.getElementById("video").height = (window.outerWidth * 0.8)-(window.outerWidth * 0.4);
    }
};