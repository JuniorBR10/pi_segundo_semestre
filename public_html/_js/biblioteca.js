function arruma_video(){
    if(window.innerWidth <= 1100){
        document.getElementById("video").width = window.innerWidth * 0.8;
        document.getElementById("video").height = (window.innerWidth * 0.8)-(window.innerWidth * 0.4);
    }
    else{
        document.getElementById("video").width = 1000;
        document.getElementById("video").height = 560;
    }
};