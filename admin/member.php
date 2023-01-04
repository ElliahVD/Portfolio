<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_admin;', 'root', '');
if (!$_SESSION['mdp']) {
    header('location : connexion.php');
}

?>

<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Afficher les membres</title>
</head>
<body>
<!--afficher tous les membres-->

<?php
$recupUsers = $bdd->query('SELECT * FROM member');
while ($user = $recupUsers->fetch()){

?>
<p><?=$user['pseudo'];  ?></p>

<?php
}
?>

<!--fin afficher tous les membres-->
</body>
</html>
