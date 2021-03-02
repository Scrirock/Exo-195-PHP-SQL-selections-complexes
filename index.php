<?php

/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>selection complexe</title>
</head>
<body>
<?php

// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.

require "./Classes/DB.php";
$conn = DB::getInstance();


/* 1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' */
// TODO votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE nom = 'Conor' ");
$infoUser->execute();

echo "<p>1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor'</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John' */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE prenom != 'John' ");
$infoUser->execute();

echo "<p>2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John'</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2 */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE id <= 2 ");
$infoUser->execute();

echo "<p>3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2 */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE id >= 2 ");
$infoUser->execute();

echo "<p>4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE id = 1 ");
$infoUser->execute();

echo "<p>5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 </p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE id > 1 AND nom = 'Doe' ");
$infoUser->execute();

echo "<p>6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe'</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'*/
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE nom = 'Doe' AND prenom = 'John' ");
$infoUser->execute();

echo "<p>7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane' */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE nom = 'Conor' OR prenom = 'Jane' ");
$infoUser->execute();

echo "<p>8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane'</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 9. Sélectionnez et affichez tous les utilisateurs en limitant les réultats à 2 résultats */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user LIMIT 2");
$infoUser->execute();

echo "<p>9. Sélectionnez et affichez tous les utilisateurs en limitant les réultats à 2 résultats</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user ORDER BY id ASC LIMIT 1");
$infoUser->execute();

echo "<p>10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )*/
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE nom LIKE 'C___r' ");
$infoUser->execute();

echo "<p>11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE nom LIKE '%e%' ");
$infoUser->execute();

echo "<p>12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e'</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE prenom IN ('John', 'Sarah')");
$infoUser->execute();

echo "<p>13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' </p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

/* 14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 */
// TODO Votre code ici.

$infoUser = $conn->prepare("SELECT * FROM exo_194.user WHERE id BETWEEN 2 AND 4 ");
$infoUser->execute();

echo "<p>14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4</p>";

foreach ($infoUser->fetchAll() as $user){
    echo "<div class='infoUsers'>";
    echo "<p><span>Nom: </span>".$user["nom"]."</p>";
    echo "<p><span>Prenom: </span>".$user["prenom"]."</p>";
    echo "<p><span>Rue: </span>".$user["rue"]."</p>";
    echo "<p><span>Numero: </span>".$user["numero"]."</p>";
    echo "<p><span>Code postal: </span>".$user["code_postal"]."</p>";
    echo "<p><span>Ville: </span>".$user["ville"]."</p>";
    echo "<p><span>Pays: </span>".$user["pays"]."</p>";
    echo "<p><span>Mail: </span>".$user["mail"]."</p>";
    echo "</div>";
}
echo "<br>";

?>
</body>
</html>
