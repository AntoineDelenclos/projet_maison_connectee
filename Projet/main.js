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


document.getElementById("eye_s").addEventListener("click", function(e){ //Switcher pour afficher/masquer le password
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



