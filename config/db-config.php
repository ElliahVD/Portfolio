<?php

//Initialisation de l'objet PDO et ouverture de la connexion pour appel à la base de données
$servername = "localhost";
$username = "ElliahVD";
$password = "PouicPouic159!";
$dbname = "espace_admin";
$Pdo_Object = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$Pdo_Object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>