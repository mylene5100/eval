<?php

    require 'Database.php';

    var_dump($_POST['nom']);
    var_dump($_POST['prenom']);
    var_dump($_POST['email']);

    if (strlen($_POST['nom']) > 1 && strlen($_POST['prenom']) > 1 && strlen($_POST['email']) > 1){
        
        $pdo = getConnect();

        $sql = "INSERT INTO user (nom,prenom,email) VALUES(?, ?, ?)";
        $array = [$_POST['nom'], $_POST['prenom'], $_POST['email']];

        var_dump($array);

        $query = $pdo->prepare($sql);
        $query->execute($array);

        header('location: /eval/index.php');
    } 

?>