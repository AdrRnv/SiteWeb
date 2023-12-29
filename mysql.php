<?php
try {
    $host = 'iutbg-lamp.univ-lyon1.fr';
    $dbname = 'p2207394';
    $username = 'p2207394';
    $password = '12207394';

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET updated = NOW()";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $rowCount = $stmt->rowCount();
    echo "Nombre de lignes mises à jour : $rowCount";

} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
