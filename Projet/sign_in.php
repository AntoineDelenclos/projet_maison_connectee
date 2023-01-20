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

        <header>
            

        </header>

    <div >
        <p_form>Formulaire d'inscription</p_form>
        <form method="POST" action="submit_treatment.php"> <!--action va permettre de rediriger vers une page après envoie du formulaire-->
            
            <fieldset>
                
                <legend>Identité</legend>
                
                
                <input class="chatbox" type="text" id="first_name" name="first_name" autofocus required placeholder="Prénom" size="20">
                <br>

                
                <input class="chatbox" type="text" id="last_name" name="last_name" required placeholder="Nom de famille" size="20">
                <br>

                <label for="birth_date">Date de naissance (*)</label>
                <input class="datebox" type="date" id="birth_date" name="birth_date" required size="25">
                <br>

                <label for="Genre">Homme</label>
                <input class="radio_b" type="radio" id="Genre" name="Genre" value=0>

                <label for="Genre">Femme</label>
                <input class="radio_b" type="radio" id="Genre" name="Genre" value=1>
                <br>

              
                
            </fieldset>

            <fieldset id="coord">

                <legend>Vos coordonnées</legend>

                
                <input class="chatbox" type="email" id="Email" name="Email" required placeholder="Adresse e-mail" size="25">
                <br>

            
                <input class="Chatbox" type="tel" id="Tel" name="Tel" placeholder="Numéro de téléphone" size="15">

                  
                <input class="chatbox" type="text" id="num_maison" name="num_maison" required placeholder="N°" size="20">
    
                <br>

                <input class="chatbox" type="text" id="Rue" name="Rue" required placeholder="Rue" size="20">
    
                <br>

                <input class="chatbox" type="text" id="CP" name="CP" required placeholder="CP" size="20">
    
                <br>

                <input class="chatbox" type="text" id="Ville" name="Ville" required placeholder="Ville" size="20">
    
                <br>

                
    
    <br>
                     
            </fieldset>
            
            <fieldset id="compte">

                <legend>Votre compte</legend>

                
                <input class="chatbox" type="text" id="uid" name="uid" required placeholder="Nom d'utilisateur" size="15">
                <br>

               
                <input class="chatbox" type="password" id="pwd" name="pwd" required placeholder="Mot de passe" size="15">
                <br>

                
                <input class="chatbox" type="password" id="cfrm_pwd" name="cfrm_pwd" required placeholder="Confirmer mot de passe" size="15">
                <button type="button" id="eye_s">Afficher</button>
                <br>
                <br>
                <input type="reset" id="reset_s" value="Réinitialisation">
               
            </fieldset>

            <button type="submit" id="submit2">Valider et créer le compte</button><!--Utilise la methode décrite dans form-->
        </form>
       <!-- <p_footer>Les champs avec la mention (*) sont obligatoires pour finaliser l'inscription</p_footer>-->
    </div>

    <!--<footer>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ratione rerum illum vero assumenda aperiam deserunt sequi ea repellendus, sint mollitia numquam. Maxime unde dolorum quam consequatur magni voluptas reprehenderit.
    </footer>-->
    
</body>
</html>
       