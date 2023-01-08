<?php

require("../config/db-config.php");

try {
    //Contrôle de l'existence des deux paramètres email et message
    if (!isset($_POST['contact_email'])) throw new Exception("Vous n'avez pas renseigné votre email");
    if (!isset($_POST['contact_message'])) throw new Exception("Il n'y a pas de message");
    // trim permet d'effacer les espaces blancs en début et fin de chaîne de caractère
    $email = trim(htmlspecialchars($_POST['contact_email']), " \n\r\t\v\x00");
    $message = htmlspecialchars($_POST['contact_message']);

    //Contrôle des formats des deux paramètres via les expressions régulières
    $Format_Email = '#[a-z0-9]{1,}[\-\_\.a-z0-9]{0,}@[a-z]{2,}[\-\_\.a-z0-9]{0,}\.[a-z]{2,6}$#';
    if (!preg_match($Format_Email, $email)) throw new Exception("Votre email ne correspond pas au format attendu");
    if (strlen($message) < 5 && strlen($message) > 500) throw new Exception("Votre message contient trop ou pas assez de caractères");

    //Tableau associatif pour requête d'insertion pour garder une trace des messages en bdd
    $Arr_Key_Value = array(
        'email' => $_POST['contact_email'],
        'message' => $_POST['contact_message']);
    //Requête d'insertion
    $Sql_Query = "INSERT INTO contact(email,message) VALUES (:email,:message)";

    //Préparation de la requête (sécurisation des variables du tableau associatif)
    $Request = $Pdo_Object->prepare($Sql_Query);
    //Exécution de la requête
    $Request->execute($Arr_Key_Value);

    mail('contact@amandinedelaire.fr', $_POST["contact_object"], $email." -- ".$message);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    //Fermeture de la connexion en détruisant la référence mémoire à l'objet PDO
    $Pdo_Object = null;
}
?>
<p>Votre message à bien été envoyé!</p>