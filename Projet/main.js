document.getElementById("eye").addEventListener("click", function(e){ //Switcher pour afficher/masquer le password
    var Password = document.getElementById("pwd");
    var Password_confirm = document.getElementById("cfrm_pwd");
    if (Password.getAttribute("type")=="password"){
        Password.setAttribute("type","text");
        Password_confirm.setAttribute("type","text");
    }
    else {
        Password.setAttribute("type","password");
        Password_confirm.setAttribute("type","password");
    }
});

function draw(){
    //Création d'une fenêtre permettant d'afficher un appartement
    var canvas=document.getElementById('tuto');
    if (canvas.getContext){ //Si canvas est supporté
        var ctx=canvas.getContext('2d');
    }
    else{ //Sinon

    }

    ctx.fillStyle='rgb(100,200,150,1)';
    ctx.fillRect(10,10,30,30);

}






/*document.getElementById("p_horloge").window.onload=function(){
    horloge('p_horloge');
};
    function horloge(el){
        if(typeof el=="string"){
            el = document.getElementById(el);
        }
    function actualiser(){
        var date = new Date();
        var str = date.getHours();
        str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
        str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
        el.innerHTML = str;
    }
    actualiser();
    setInterval(actualiser,1000);
};*/