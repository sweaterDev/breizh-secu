<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
<h2>Inscription</h2>
<form action="inscriptionController2.php" method="post">
    Nom: <input type="text" name="nom" required><br>
    Prénom: <input type="text" name="prenom" required><br>
    email: <input type="text" name="email" required><br>
    Mot de passe: <input type="password" name="password" required><br>
    Adresse: <input type="text" name="adresse" required><br>
    <input type="submit" name="submit" value="S'inscrire">
</form>

</body>
</html>