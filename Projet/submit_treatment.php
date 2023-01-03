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

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


//mettre ? et mysqli_prepare puis execute
$sql="INSERT INTO UTILISATEUR (Nom,Prenom,Nom_utilisateur,Mot_de_passe) VALUES ('$first_name','$last_name','$uid','$pwd');";
mysqli_query($con,$sql);

header("Location: ./index.php?signup=success");

?>