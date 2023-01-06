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
    <?php echo $_SESSION['uid'];?><br>
    <?php echo $_SESSION['pwd'];?><br>
    </div>