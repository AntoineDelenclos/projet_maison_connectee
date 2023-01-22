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

    <div class = "box" id = "v1">
        <p>Conseils écologiques</p>
        <fieldset>
                <legend>Sur l'utilisation de ses propres appareils</legend>
                <br>
                <div> 
                    <legend>Four</legend>
                <iframe style="position:relative;left:0px;top:0px;overflow:hidden" 
                frameborder="0" type="text/html" src="https://www.dailymotion.com/embed/video/x8fso9n?" 
                width="560" height="315" allowfullscreen title="Lecteur vidéo Dailymotion"> 
                </iframe> 
                </div>
                <legend> Economies d'énergie : cette erreur que l'on commet tous avec le four 
                    et qui fait flamber la facture d'électricité ou de gaz", par "Version Femina"
                </legend>
                <br>
                <legend>Lampe</legend>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/XzJBwvQwUpQ" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
                <legend>"Comment choisir une ampoule LED ?", par "Bricolage Facile" </legend>
                <br>
                <legend>Réfrigérateur-Congélateur</legend>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5694Noau1rU" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
                <legend> "Conseils pour économiser de l'énergie avec votre réfrigérateur-congélateur", par "eSpares France"</legend>
        </fieldset>
        </p> 
    
    </div>

    <div class = "box" id = "v2">
    <br>
        <p></p>
            <fieldset>
                    <legend>Sur ses habitudes quotidiennes</legend>
                    <br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2tESNUb0QIo" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                    <legend> "11 ASTUCES POUR DEVENIR ÉCOLO AU QUOTIDIEN", par "Claire & Arthur Les droners" </legend>
                    <br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uAbjqWDrjfQ" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                    <legend> "Mes conseils éco - Économisons sur l'électricité", par "GEG - Gaz Electricité de Grenoble" </legend>
                    <br>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mER6tdBe7t0" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                    <legend> "5 écogestes pour faire des économies au quotidien", par "l'Energie Tout Compris"</legend>
                    <br>
                </fieldset>
            </fieldset>
        </p>
    </div>
</body>