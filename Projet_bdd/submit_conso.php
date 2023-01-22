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

    <a href="main_page_online.php">
        <header>
            <p>Maison Connectée</p>
        </header>
    </a>
    <a href = "graphe_conso.php">
        <p>Retour au choix de la durée</p>
        <br>
    </a>

    <?php
    

    //pour récupérer l'id user
    $uid_bdd = $_SESSION['uid'];

    $sql1 = "SELECT Id_user
    FROM UTILISATEUR
    WHERE Nom_utilisateur = '$uid_bdd';";
    $result1 = mysqli_query($con, $sql1);
    mysqli_data_seek($result1, 0);
    $ligne1 = mysqli_fetch_row($result1); //$ligne1[0] = id user
    
    /* pour afficher la liste des appareils présent dans 1 des apparts de l'utilisateur +
    conso de l'eau */
    $sql2 = "SELECT * 
    FROM `appareil` NATURAL JOIN consommation NATURAL JOIN ressource  
    WHERE Id_appart IN (SELECT Id_appart
                       FROM appartement
                       WHERE Id_user = 1)
    AND id_ressource = 1;";
    $result2 = mysqli_query($con, $sql2);
    mysqli_data_seek($result2, 0);
    $col2 = mysqli_fetch_all($result2);
    
    //prendre en compte le nb de mois donné 'n'
    $q3 = $_POST['q3']; // nb de mois donné
    $_SESSION['q3'] = $_POST['q3']; 
    for($i = 0; $i < 5; $i++)
    {
        printf("%d\n", $q3);
    }

    ?>
    <?php enum Mois: int
    {
        case Janvier = 1;
        case Février = 2;
        case Mars = 3;
        case Avril = 4;
        case Mai = 5;
        case Juin = 6;
        case Juillet = 7;
        case Août = 8;
        case Septembre = 9;
        case Octobre = 10;
        case Novembre = 11;
        case Décembre = 12;
    } 
    ?>
    <br>
    <?php echo "<img src = './graph_img.php' border = 1 />";?>
    
    