<?php include 'bdd_connect.php';?>

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

    <a href="index.php">
        <header>
            <p>Maison Connectée</p>
        </header>
    </a>

    <div>
        <p>Formulaire d'inscription</p>
        <form method="POST" action="submit_treatment.php"> <!--action va permettre de rediriger vers une page après envoie du formulaire-->
            <fieldset>
                <legend>Identité</legend>
                <label for="first_name">Prénom (*)</label>
                <input class="chatbox" type="text" id="first_name" name="first_name" autofocus  placeholder="Prénom" size="20">
                <br>

                <label for="last_name">Nom de famille (*)</label>
                <input class="chatbox" type="text" id="last_name" name="last_name" placeholder="Nom de famille" size="20">
                <br>

                
            </fieldset>

            <fieldset>
                <legend>Vos coordonnées</legend>
                
            </fieldset>
            
            <fieldset>
                <legend>Votre compte</legend>
                <label for="uid">Nom d'utilisateur (*)</label>
                <input class="chatbox" type="text" id="uid" name="uid"  placeholder="Nom d'utilisateur" size="15">
                <br>

                <label for="pwd">Mot de passe (*)</label>
                <input class="chatbox" type="password" id="pwd" name="pwd"  placeholder="Mot de passe" size="15">
                <button type="button" id="eye">Afficher</button>
                <br>

               
            </fieldset>
            <button type="submit" name="submit">Valider et créer le compte</button> <!--Utilise la methode décrite dans form-->
        </form>
        <p>Les champs avec la mention (*) sont obligatoires pour finaliser l'inscription</p>
    </div>

    <footer>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ratione rerum illum vero assumenda aperiam deserunt sequi ea repellendus, sint mollitia numquam. Maxime unde dolorum quam consequatur magni voluptas reprehenderit.
    </footer>
    
</body>
</html>