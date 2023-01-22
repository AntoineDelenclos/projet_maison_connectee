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
                $sql_0="SELECT Id_user FROM UTILISATEUR WHERE Nom_utilisateur='$uid_pp';";
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

                $sql="SELECT * FROM IMAGES NATURAL JOIN APPARTEMENT NATURAL JOIN ADRESSE WHERE Id_user='$Id_user';";
                $result=mysqli_query($con,$sql);
                $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
                $cnt=1; //Compteur du nombre d'appartement 
                foreach($rows as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row["Num_maison"]." ".$row["Rue"].", ".$row["Ville"].", ".$row["CP"];?></td>
                        <td><?php 
                        echo '<img src="data:image/png;base64,'.base64_encode($row["Blob_image"]).'"/>';
                        //echo "projet_maison_connectee/plans_appart".DIRECTORY_SEPARATOR."User_".basename($Id_user)."_Plan_appart_2".".png";
                        ?></td>
                        <td><a href="modif_appart.php">
                            <?php $_SESSION['id_app']=$cnt;?>
                                <button id="modif" type="submit">Modifier</button>
                            </a>
                            <br>
                            <a href="consult_appart.php">
                                <button id="consult_appart" type="button">Consulter</button>
                            </a>
                    </tr>
                    <?php
                    $cnt=$cnt+1;
                    }
                    ?>
            </tbody>
        </table>
    </div>

</body>
