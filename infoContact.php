<?php 
include 'include/config.php';
session_start();
    try {
        $host = 'iutbg-lamp.univ-lyon1.fr';
        $dbname = 'p2207394';
        $username = 'p2207394';
        $password = '12207394';

        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);     

        $nom = $_POST['msgnom'];
        $email = $_POST['msgemail'];
        $message = $_POST['msg'];

        $query = "INSERT INTO Messages (nom, email, message) 
                  VALUES (:nom, :email, :message)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
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
                <td><?php echo $_POST['msgnom']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $_POST['msgemail']; ?></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><?php echo $_POST['msg']; ?></td>
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