<?php session_start();?>
<?php include 'bdd_connect.php';?>

<?php
$uid=$_SESSION['uid'];

$sql_0="SELECT Id_user FROM UTILISATEUR WHERE Nom_utilisateur='$uid';";
$result_0=mysqli_query($con,$sql_0);

mysqli_data_seek($result_0,0);
$row_0=mysqli_fetch_row($result_0);
$Id_user=$row_0[0];
mysqli_free_result($result_0);

$sql_capp="SELECT COUNT(*) FROM APPARTEMENT WHERE Id_user='$Id_user';";
$result_capp=mysqli_query($con,$sql_capp);

mysqli_data_seek($result_capp,0);
$row_capp=mysqli_fetch_row($result_capp);
$count_appart=$row_capp[0];
echo "count_appart :".$count_appart;
mysqli_free_result($result_capp);



$statusMsg='';
// File upload path
$targetDir = getcwd()."/plans_appart".DIRECTORY_SEPARATOR;
//$fileName = basename($_FILES["fichier_photo"]["name"]);
$fileName = basename($Id_user)."Plan_appart";
echo $_FILES["fichier_photo"]["tmp_name"];
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["fichier_photo"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if (in_array($fileType,$allowTypes)){
        // Upload file to server
        if (@move_uploaded_file($_FILES["fichier_photo"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            // `Taille_image`, `Type_image`, `Descript_image`, `Blob_image`,
            $sql="INSERT INTO IMAGES(`Nom_image`,`Ajout_image`,`Id_user`) VALUES ('$fileName', NOW(), '$Id_user');";
            $insert = mysqli_query($con,$sql);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }
            else{
                $statusMsg = "File upload failed, please try again.";
            }
        }
        else{
            echo "Error #".$_FILES["fichier_photo"]["error"];
            //$statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}
else{
    $statusMsg = 'Please select a file to upload.';
}

/*$sql_im="SELECT Id_image FROM IMAGES WHERE Id_user='$Id_user';";
$result_im=mysqli_query($con,$sql_im);

mysqli_data_seek($result_im,0);
$row_im=mysqli_fetch_row($result_im);
$Id_image=$row_im[0];
mysqli_free_result($result_im);*/

$sql_0="SELECT Id_user FROM UTILISATEUR WHERE Nom_utilisateur='$uid';";
$result_0=mysqli_query($con,$sql_0);

mysqli_data_seek($result_0,0);
$row_0=mysqli_fetch_row($result_0);
$Id_user=$row_0[0];
mysqli_free_result($result_0);

$ville=$_POST['ville'];
$CP=$_POST['CP'];
$n_rue=$_POST['n_rue'];
$rue=$_POST['rue'];

$n_appart=$_POST['n_appart'];
$deg_secu=$_POST['deg_secu'];
$type_appart=$_POST['type_appart'];

$sql_1="INSERT INTO ADRESSE (`Ville`,`CP`,`Rue`,`Num_maison`) VALUES ('$ville','$CP','$rue','$n_rue');"; //Ajouter verif existant
$result_1=mysqli_query($con,$sql_1);

/*$sql_2="SELECT Id_adresse FROM APPARTEMENT WHERE Id_user='$Id_user';";
$result_2=mysqli_query($con,$sql_2);

mysqli_data_seek($result_2,0);
$row_2=mysqli_fetch_row($result_2);
$Id_adresse=$row_2[0];
mysqli_free_result($result_2);*/

$sql_3="INSERT INTO APPARTEMENT (`Num_appart`,`Deg_secu`,`Type_appart`,`Id_user`) VALUES ('$n_appart','$deg_secu','$type_appart','$Id_user');";
mysqli_query($con,$sql_3);


//header("Location: ./gestion_appart.php?upload=success");

// Display status message
echo $statusMsg;
?>