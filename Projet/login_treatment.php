<?php session_start();?>
<?php include 'bdd_connect.php';?>


<?php
echo "Connection success";

$uid=$_POST['uid'];
$pwd=$_POST['pwd'];


$sql_1="SELECT Nom_utilisateur FROM UTILISATEUR WHERE Nom_utilisateur='$uid';";
$result_1=mysqli_query($con,$sql_1);

mysqli_data_seek($result_1,0);
$row_1=mysqli_fetch_row($result_1);
printf("UID : %s",$row_1[0]);
$_SESSION['uid']=$row_1[0];
mysqli_free_result($result_1);

$sql_2="SELECT Mot_de_passe FROM UTILISATEUR WHERE Nom_utilisateur='$uid';";
$result_2=mysqli_query($con,$sql_2);

mysqli_data_seek($result_2,0);
$row_2=mysqli_fetch_row($result_2);
printf("PWD : %s",$row_2[0]);
$_SESSION['pwd']=$row_2[0];
mysqli_free_result($result_2);

if ($uid==$_SESSION['uid']){
    if($pwd==$_SESSION['pwd']){
        header("Location: ./index.php?login=success");
    }
    else{
        header("Location: ./login.php?login=error");
    }
}

?>


