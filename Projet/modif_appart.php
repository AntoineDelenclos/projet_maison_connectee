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

<?php
$_SESSION["type_app"]="Electronique";
$sql="INSERT INTO APPAREIL (`Nom_appareil`, `Type_appareil`, `Libel_appareil`, `Id_appart`) VALUES ('$_POST["lampe"]','$_SESSION["type_app"]','$_POST["piece"]','$_SESSION["id_app"]');";
$result=mysqli_query($con,$sql);

?>

<body>
<div>
        
        <p>Ajout d'appareil</p>
        <form method="POST" action="modif_appart.php">
            <fieldset>
                <label for="lampe">Lampe</label>
                <input class="chatbox" type="text" id="lampe" name="lampe">
                <br>
                <label for="tv">Télévision</label>
                <input class="chatbox" type="text" id="tv" name="tv">
                <br>
                <label for="piece">Pièce</label>
                <input class="chatbox" type="text" id="piece" name="piece">
                <br>              
            </fieldset>

            <button type="submit" name="submit">Ajouter</button>
        </form>
        

    </div>