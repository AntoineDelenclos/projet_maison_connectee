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

<body onload="draw();">

    <?php echo "Connection success";?>
    
    <header>
        <a href="index.php">
            <p>Maison Connectée</p>
        </a>
        <div id="p_horloge">Date</div>
    </header>

    <div>
        <a href="add_image.php">
            <button id="app_appart">Ajouter un appartement</button>
        </a>
        <br>
        <table class="tableau">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Adresse</th>
                    <th>Plan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $uid_pp=$_SESSION['uid'];
                $sql="SELECT * FROM IMAGES NATURAL JOIN APPARTEMENT WHERE "

                ?>

                <tr>
                    <td>
                </tr>
            </tbody>
        </table>
        <!--
        <button id="appart_1">Consulter l'appartement n°1</button>
        
        A supprimer
        
        <canvas id="tuto" width=150 height=200>
            <img src="https://img.freepik.com/vecteurs-libre/belle-maison_24877-50819.jpg?w=2000" width=150 height=200 alt="Maison si canvas pas supporté">
        </canvas>-->
    </div>

</body>
