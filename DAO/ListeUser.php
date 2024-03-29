<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test CompteDAO</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Liste des Comptes</h2>

<a href='http://localhost/Breizhsecu3/DAO/InscriptionController.php'>Inscription</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Identifiant</th>
        <th>login</th>
        <th>password</th>
        <th>adresse</th>
        <th>Statut</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once 'CompteController.php';

    foreach ($comptes as $compte) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($compte->getId()) . "</td>";
        echo "<td>" . htmlspecialchars($compte->getNom()) . "</td>";
        echo "<td>" . htmlspecialchars($compte->getPrenom()) . "</td>";
        echo "<td>" . htmlspecialchars($compte->getEmail()) . "</td>";
        echo "<td>" . htmlspecialchars($compte->getIdentifiant()) . "</td>";
        echo "<td>" . htmlspecialchars($compte->getLogin()) . "</td>";
        echo "<td>" . htmlspecialchars($compte->getPassword()) . "</td>";
        echo "<td>" . htmlspecialchars($compte->getAdresse()) . "</td>";
        echo "<td>" . htmlspecialchars($compte->getStatut()) . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

</body>
</html>

