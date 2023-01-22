<?php session_start();?>
<?php include 'bdd_connect.php';?>
<?php include 'header_page.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
	<script src="main.js" defer></script>
    <title>Maison Connectée</title>
</head>



<body>
    

    <div>
        
        <p1_login>Veuillez bien vous connecter</p1_login>
        
        
        <form method="POST" action="login_treatment.php">
            <fieldset id="login_page">
                
                <input class="chatbox" type="text" id="uid" name="uid" autofocus required placeholder="Nom d'utilisateur" size="15">
                <br>
                
                <input class="chatbox" type="password" id="pwd" name="pwd" required placeholder="Mot de passe" size="15">

                <button type="button" id="eye">Afficher</button>
                
          
                <input type="reset" id="reset_l" value="Réinitialisation">

                <button type="submit" id="submit">Connexion</button>
                
            </fieldset>

            
        </form>
        
    </div>

    <!--<footer>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ratione rerum illum vero assumenda aperiam deserunt sequi ea repellendus, sint mollitia numquam. Maxime unde dolorum quam consequatur magni voluptas reprehenderit.
    </footer>-->
    
</body>
</html>
