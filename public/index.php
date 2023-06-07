<?php

require '../vendor/autoload.php';
//On crée une connexion à la base de données SQL qu'on veut utiliser
$connection = new PDO("mysql:host=localhost;dbname=php_pdo", "root", "1234");
//Avec cette connexion, on prépare la requête que l'on souhaite exécuter, ici récupérer tous les produits
$query = $connection->prepare("SELECT * FROM product");
//On exécute la requête
$query->execute();
//On fait une boucle sur les résultat de la requête et pour le moment on fait juste un echo de chaque
foreach($query->fetchAll() as $line) {
    echo $line['label'];
}
