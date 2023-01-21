<?php session_start();?>
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
    
    <p>Ajout du plan de l'appartement</p>
    <form enctype='multipart/form-data' method='POST' action='transfert.php'>
        <fieldset>
        <!-- <input type="hidden" name="MAX_FILE_SIZE" value="3 000 000"> Taille de fichier max : 3Mo-->
        <input type="file" name="fichier_photo" size=50>
        </fieldset>
        
        <fieldset>
            <label for="ville">Ville</label>
            <input class="chatbox" type="text" id="ville" name="ville" autofocus required placeholder="Ville" size="60">
            <br>
            <label for="CP">Code Postal</label>
            <input class="chatbox" type="text" id="CP" name="CP" required placeholder="CP" size="11">
            <br>
            <label for="n_rue">Numéro de rue</label>
            <input class="chatbox" type="text" id="n_rue" name="n_rue" required placeholder="N_Rue" size="11">
            <br>
            <label for="rue">Rue</label>
            <input class="chatbox" type="text" id="rue" name="rue" required placeholder="Rue" size="60">
            <br>
        </fieldset>
        <fieldset>
            <label for="n_appart">Numéro d'appartement</label>
            <input class="chatbox" type="text" id="n_appart" name="n_appart" required placeholder="Numéro d'appartement" size="11">
            <br>
            <label for="deg_secu">Degré de sécurité</label>
            <input class="chatbox" type="text" id="deg_secu" name="deg_secu" required placeholder="Degré de sécurité" size="50">
            <br>
            <label for="type_appart">Type d'appartement</label>
            <input class="chatbox" type="text" id="type_appart" name="type_appart" required placeholder="Type d'appartement" size="50">
            <br>
        </fieldset>
        <!--
        <label for="surface">Surface en m2</label>
        <input type="text" name="surface" size=30>
        <br>-->
        <button type="submit" name="submit">Uploader cette image</button>
    </form>
</body>