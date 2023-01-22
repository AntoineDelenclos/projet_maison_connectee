<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php /*corps de la requete pour graphe conso : conso totale en eau par mois de user
SELECT Id_appareil, SUM(duree_conso_en_h * conso_kwh) conso_eau, MONTH(date_conso) AS Mois
FROM `appareil` NATURAL JOIN consommation NATURAL JOIN ressource  
WHERE Id_appart IN (SELECT Id_appart
                   FROM appartement
                   WHERE Id_user = 1)
AND id_ressource = 1
GROUP BY Mois;*/?> 

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

    <a href="main_page_online.php">
        <header>
            <p>Maison Connectée</p>
        </header>
    </a>
    <a href = "main_page_online.php">
        <p>Retour à la page d'accueil</p>
        <br>
    </a>

    <div>
        <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
            <p>Consommations</p>
            <form method="POST" action="submit_conso.php">
                <fieldset>
                    <legend>Graphe des consommations en eau, électricité et gaz</legend>
                    <label for = "q3" > Sur quel intervalle de temps voulez-vous voir vos consommations ? 
                        (en nombre de mois)
                    </label>
                        <input class = "chatbox" type = "int" id = "q3" 
                        name = "q3" autofocus placeholder = "Nombre de mois" 
                        size = "20">
                        <br>
                </fieldset>
                <button type="submit" name="submit">Valider</button>
            </form>
        </div>
    </div>
</body>

