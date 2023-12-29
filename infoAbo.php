<?php 
include 'include/config.php';
session_start();
    try {
        $host = 'iutbg-lamp.univ-lyon1.fr';
        $dbname = 'p2207394';
        $username = 'p2207394';
        $password = '12207394';

        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);     

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $adresse = $_POST['adresse'];
        $code_postal = $_POST['codepostal'];
        $ville = $_POST['ville'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (email, name, lastname, password, town, postal, address, updated) 
                  VALUES (:email, :name, :lastname, :password, :town, :postal, :address, NOW())";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':name', $prenom);
        $stmt->bindParam(':lastname', $nom);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':town', $ville);
        $stmt->bindParam(':postal', $code_postal);
        $stmt->bindParam(':address', $adresse);
        $stmt->execute();

        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Projet</title>
</head>
<body>
<header>
    <?php include "modules/header.php" ?>
</header>
<main>
    <section class="InfoPage">
        <h1>Informations du formulaire Contact</h1>
        <table>
            <tr>
                <th>Champ</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td>Nom</td>
                <td><?php echo $_POST['nom']; ?></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td><?php echo $_POST['prenom']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $_POST['email']; ?></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><?php echo $_POST['password']; ?></td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><?php echo $_POST['date']; ?></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td><?php echo $_POST['adresse']; ?></td>
            </tr>
            <tr>
                <td>Code postal</td>
                <td><?php echo $_POST['codepostal']; ?></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td><?php echo $_POST['ville']; ?></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td><?php echo $_POST['genre']; ?></td>
            </tr>
            <tr>
                <td>Hobbies</td>
                <td>
                    <?php
                    echo '<ul>';
                    foreach ($_POST['hobbies'] as $interet) {
                        echo '<li>' . htmlspecialchars($interet) . '</li>';
                    }
                    echo '</ul>';
                    ?>
                </td>
            </tr>
            <tr>
                <td>Couleur</td>
                <td><?php echo $_POST['color']; ?></td>
            </tr>
            <tr>
                <td>Fichier</td>
                <td><?php echo $_POST['file']; ?></td>
            </tr>
        </table>
    </section>
</main>
<footer>
    <?php include "modules/footer.php" ?>
</footer>

<span class="arrow"></span>

<script src="js/script.js"></script>

</body>
</html>