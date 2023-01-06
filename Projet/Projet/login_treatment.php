<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php
echo "Connection success";




header("Location: ./index.php?login=success");

?>
