<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php
$sql="INSERT INTO SUBSTANCE (Nom_substance,Min_substance,Max_substance,Crit_substance,Ideal_substance) VALUES ('Truc',8,4,3,3);";
mysqli_query($con,$sql);
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
    
    <?php echo "Connection success";?>
    

        <header>
            <a href="index.php">
                <p>Maison Connectée</p>
            </a>
            <p id="horloge"><?php echo date ('d/m/Y H:i:s'); ?></p>
        </header>
    

    <div>

        <a href="login.php">
            <button id="Connect_index" type="button">Se connecter</button>
        </a>

        <a href="sign_in.php">
            <button id="Sign_in_index" type="button">S'inscrire</button>
        </a>

        <a href="disconnect.php">
            <button id="Disconnect_index" type="button">Déconnexion</button>
        </a>

        <a href="profile_page.php">
            <button id="Profile_page_index" type="button">Profil</button>
        </a>

        <a href="debug.php">
            <button id="Debug_page" type="button">Debug</button>
        </a>
    
    <p>Ceci est du PHP : <?php echo("test");?></p>
        
    </div>

    <footer>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ratione rerum illum vero assumenda aperiam deserunt sequi ea repellendus, sint mollitia numquam. Maxime unde dolorum quam consequatur magni voluptas reprehenderit.
    </footer>
    
</body>
</html>
