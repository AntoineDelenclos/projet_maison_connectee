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

    <a href="main_page_online.php">
        <header>
            <p>Maison Connectée</p>
        </header>
    </a>
    <a href = "main_page_online.php">
        <p>Retour à la page d'accueil</p>
        <br>
    </a>

<body>
    
    <?php
    $uid_bdd = $_SESSION['uid'];
    $sql_p="SELECT Prenom, Nom, Date_naissance, Email, 
    Tel, Genre, Date_creation_cpt 
    FROM UTILISATEUR 
    WHERE Nom_utilisateur='$uid_bdd';";
    $result_p=mysqli_query($con,$sql_p);
    mysqli_data_seek($result_p,0);
    $row_p=mysqli_fetch_row($result_p);

    if($row_p[5] == 1)
    {
        printf("Vos informations personnelles :<br />
        Prénom : %s <br />
        Nom : %s <br />
        Date de naissance : %s <br />
        Email : %s <br />
        Numéro de téléphone : %s <br />
        Genre : %s <br />
        Date de création du compte : %s <br />", $row_p[0],
        $row_p[1], $row_p[2], $row_p[3], 
        $row_p[4], "Homme", $row_p[6]);

    }
    else
    {
        printf("Vos informations personnelles :<br />
        Prénom : %s <br />
        Nom : %s <br />
        Date de naissance : %s <br />
        Email : %s <br />
        Numéro de téléphone : %s <br />
        Genre : %s <br />
        Date de création du compte : %s <br />", $row_p[0],
        $row_p[1], $row_p[2], $row_p[3], 
        $row_p[4], "Femme", $row_p[6]);
    }
    mysqli_free_result($result_p);

    ?>