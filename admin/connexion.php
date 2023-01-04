

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion Admin</title>
</head>
<body>
<form method="post" action="admin.php" align="center">
    <div class="mb-3">
        <label for="pseudo" class="form-label">Pseudo</label>
        <input name="pseudo" type="text" class="form-control" id="pseudo" aria-describedby="pseudo">
    </div>
    <div class="mb-3">
        <label for="mdp" class="form-label">Mot de passe</label>
        <input name="mdp" type="password" class="form-control" id="mdp">
    </div>
    <button type="submit" class="btn">Valider</button>
</form>

</body>
</html>
