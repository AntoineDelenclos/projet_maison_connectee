document.getElementById("eye").addEventListener("click", function(e){ //Switcher pour afficher/masquer le password
    var Password = document.getElementById("Password");
    var Password_confirm = document.getElementById("Password_confirm");
    if (Password.getAttribute("type")=="password"){
        Password.setAttribute("type","text");
        Password_confirm.setAttribute("type","text");
    }
    else {
        Password.setAttribute("type","password");
        Password_confirm.setAttribute("type","password");
    }
});