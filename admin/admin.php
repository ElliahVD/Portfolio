<?php
session_start();
require("../config/db-config.php");

//PASSWORD_BCRYPT  sécurise la connexion ( Salt et Cost 10)

if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {
    $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
    $mdp_saisi = $_POST['mdp'];
//        statement = la selection du mdp dans membre dont le pseudo est = au pseudo entré
    $stmt = $Pdo_Object->prepare('SELECT password FROM member WHERE pseudo=:pseudo');
    $stmt->execute(['pseudo' => $pseudo_saisi]);
    $password = $stmt->fetch();

    if (password_verify($mdp_saisi, $password[0])) {
        $_SESSION['mdp'] = $mdp_saisi;
        echo "<p>Espace admin, Bonjour ".$pseudo_saisi."!</p>";
        echo "<ul>";
        $data =$Pdo_Object->query("SELECT * FROM member")->fetchAll();
        foreach ($data as $member){
            echo utf8_encode( "<li>".$member['pseudo']."</li>");
        }
        echo "</ul>";
    } else {
        echo "Votre mot de passe ou pseudo est incorrect";
    }
} else {
    echo "Veuillez compléter tous les champs";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
</body>
</html>
