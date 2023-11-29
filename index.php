<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

// Configuration de la base de données
    $host = "localhost";
    $dbname = "demo";
    $username = "root";
    $password = "";

    // Connexion à la base de données
    $dbconnect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "SELECT * FROM `demonstration`";
    $query = $dbconnect->prepare($sql);
    $query->execute();
    $tab = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($tab as $key){
    ?>
    <form class="formulaire" method="POST">
        <p><?php echo $key["id"]; ?></p>
        <p><?php echo $key["texte"]; ?></p>
        <input type="submit" id="modifierInput" value="modifier">   
    </form>
    <form class="formulaireModifie" method="POST">
        <input type="text" name="id" value="<?php echo $key["id"]; ?>"></input>
        <input type="text" name="texte" value="<?php echo $key["texte"]; ?>"></input>
        <input type="submit" name="valid<?php echo $key['id']; ?>" class="modif<?php echo $key['id'] ?>" value="modifier">   
    </form>
    <?php
}
    ?>


    <script src="script.js"></script>
</body>
</html>