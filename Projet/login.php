<?php

$serverName = "localhost";
$userName="root";
$password="";
$dbName="Maison_Connect";

$con = mysqli_connect($serverName,$userName,$password,$dbName);

if(mysqli_connect_errno()){
    echo "Failed to connect";
    exit();
}
echo "Connection success";

//Requête de test : on arrive bien à faire des SELECT mais il y a un problème (page blanche et pas d'insertion) avec la requête INSERT INTO
$sql2 = "SELECT * FROM SUBSTANCE";

if ($result2=mysqli_query($con,$sql2)){
    while ($row = mysqli_fetch_assoc($result2)){
        echo " Nom_substance : ".$row['Nom_substance'];
    }
}
else{
    echo "Error :". $sql2. "<br>". mysqli_error($con);
}

mysqli_close($con);

?>

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
        <p>Veuillez bien vous connecter</p>
        <label for="Username">Nom d'utilisateur</label>
        <input class="chatbox" type="text" id="Username" name="Username" autofocus required placeholder="Nom d'utilisateur" size="15">
        <br>
        <label for="Password">Mot de passe</label>
        <input class="chatbox" type="password" id="Password" name="Password" required placeholder="Mot de passe" size="15">

        <button type="button" id="eye">Afficher</button>
        <br>
        <a href="index.php">
            <button id="Connect_button" type="button">Connexion</button>
        </a>
        

    </div>

    <footer>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ratione rerum illum vero assumenda aperiam deserunt sequi ea repellendus, sint mollitia numquam. Maxime unde dolorum quam consequatur magni voluptas reprehenderit.
    </footer>
    
</body>
</html>
