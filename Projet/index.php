<?php include 'bdd_connect.php';?>
<?php include 'header_page.php';?>

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
    <!--<?php echo "Connection success";?> -->

        <header>
            
            
        </header>

    <!--<p>Ceci est du PHP : <?php echo("test");?></p>-->
        
    </div>


    



    <!--<footer>
        
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ratione rerum illum vero assumenda aperiam deserunt sequi ea repellendus, sint mollitia numquam. Maxime unde dolorum quam consequatur magni voluptas reprehenderit.
    </footer>-->
    
</body>
</html>
