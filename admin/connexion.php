

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../index.css">
    <title>Connexion Admin</title>
</head>
<body>
<br>
<form classe="container contact-form mt-5 pt-3" method="post" action="admin.php" align="center">
    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo</label>
        <input name="pseudo" type="text" class="form-control" id="pseudo" aria-describedby="pseudo">
    </div>
    <div class="mb-3">
        <label for="mdp" class="form-label">Mot de passe</label>
        <input name="mdp" type="password" class="form-control" id="mdp">
    </div>
    <br>
    <button type="submit" class="btn m-5">Valider</button>
</form>

</body>
</html>
