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

    <?php
    $uid_bdd=$_SESSION['uid'];
    $sql_p="SELECT Prenom, Nom, Date_naissance, Email, Tel, Genre, Est_admin, Etat_cpt, Date_creation_cpt FROM UTILISATEUR WHERE Nom_utilisateur='$uid_bdd';";
    $result_p=mysqli_query($con,$sql_p);

    mysqli_data_seek($result_p,0);
    $row_p=mysqli_fetch_row($result_p);

    $_SESSION['first_name']=$row_p[0];
    $_SESSION['last_name']=$row_p[1];
    $_SESSION['birth_date']=$row_p[2];
    $_SESSION['Email']=$row_p[3];
    $_SESSION['Tel']=$row_p[4];
    $_SESSION['Genre']=$row_p[5];
    $_SESSION['Est_admin']=$row_p[6];
    $_SESSION['Etat_cpt']=$row_p[7];
    $_SESSION['Date_creation_cpt']=$row_p[8];

    mysqli_free_result($result_p);

    ?>



    <a href="index.php">
        <header>
            <p>Maison Connectée</p>
        </header>
    </a>

    <div>
    <?php echo $_SESSION['first_name'];?><br>
    <?php echo $_SESSION['last_name'];?><br>
    <?php echo $_SESSION['birth_date'];?><br>
    <?php if ($_SESSION['uid']!=NULL){
        if ($_SESSION['Genre']==0){
            echo "Homme";
        }
        else{
            echo "Femme";
        }
    }?><br>
    <?php echo $_SESSION['Email'];?><br>
    <?php echo $_SESSION['Tel'];?><br>
    <?php echo $_SESSION['Est_admin'];?><br>
    <?php echo $_SESSION['Etat_cpt'];?><br>
    <?php echo $_SESSION['Date_creation_cpt'];?><br>
    <?php echo $_SESSION['uid'];?><br>
    <?php echo $_SESSION['pwd'];?><br>

    <a href="gestion_appart.php">
        <button id="Gestion_appart" type="button">Gérer vos logements</button>
    </a>

    </div>
</body>
</html>