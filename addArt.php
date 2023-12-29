<?php include 'include/config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>Projet</title>
</head>
<body>
<header>
  <?php include "modules/header.php" ?>
</header>
<main class="Contact">
    <section id="Abo">
        <h2 id="Titre">Abonnez-Vous</h2>
    </section>
    <section id="Form">
        <form id="my3Form" action="infoArt.php" method="post">
            <input type="text" placeholder="Entrez le titre" name="titre">
            <input type="text" placeholder="Entrez une description courte" name="description">
            <textarea placeholder="Entrez le contenu" name="contenu"></textarea>
            <input type="file" name="fileArt" id="fileArt"/>
            <button type="submit" id="submitButton">Soumettre</button>
        </form>
    </section>
</main>

<footer>
  <?php include "modules/footer.php" ?>
</footer>

<span class="arrow"></span>

<script src="js/script.js"></script>

</body>
</html>
