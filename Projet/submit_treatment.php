<?php include 'bdd_connect.php';?>


<?php
echo "Connection success";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birth_date = $_POST['birth_date'];
$Genre = $_POST['Genre'];
$Email = $_POST['Email'];
$Tel = $_POST['Tel'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


//mettre ? et mysqli_prepare puis execute
$sql="INSERT INTO UTILISATEUR (`Nom`,`Prenom`,`Date_naissance`,`Genre`,`Email`,`Tel`,`Nom_utilisateur`,`Mot_de_passe`) VALUES ('$last_name','$first_name','$birth_date','$Genre','$Email','$Tel','$uid','$pwd');";
mysqli_query($con,$sql);

header("Location: ./index.php?signup=success");

?>