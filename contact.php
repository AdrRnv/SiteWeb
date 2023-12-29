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
<main>
    <section id="ContactImg">
        <h2 id="Titre">Contact</h2>
    </section>
    <section id="Contact">
        <div>
            <h2 id="">CONTACTEZ-NOUS</h2>
            <p>
                It is a long established fact that a reader will be distracted
                by the readable content of a page when looking at its layout.
            </p>
        </div>
    </section>
    <section id="Form">
        <div class="div1">
            <img src="img/telephone.png" alt="Image">
            <h3>Par téléphone</h3>
            <p>Appelez-nous au : <?php echo NUM_TEL; ?></p>
        </div>
        <div>
            <h3>Par formulaire</h3>
            <form id="my2Form" action="infoContact.php" method="post">
                <input type="text" placeholder="Entrez votre nom" name="msgnom">
                <input type="email" placeholder="Entrez une adresse email valide" name="msgemail">
                <textarea placeholder="Entrez votre message" name="msg"></textarea>
                <button type="submit" id="submitButton">Soumettre</button>
            </form>
        </div>
        <div class="div1">
            <img src="img/mail.png" alt="Image">
            <h3>Par mail</h3>
            <p>
                Écrivez-nous sur l'adresse mail :
                <br>
                <?php echo ADDR_MAIL; ?>
            </p>
        </div>
    </section>
</main>


<footer>
    <?php include "modules/footer.php" ?>
</footer>

<span class="arrow"></span>

<script src="js/script.js"></script>

</body>
</html>
