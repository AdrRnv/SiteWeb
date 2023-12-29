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
    <section id="BlogImg">
        <h2 id="Titre">Blog</h2>
    </section>
    <div id="Nsarticles">
        <h2>Nos articles</h2>
    </div>
    <section id="Blog2">
        <div class="flex">
            <div>
                <h3>It is a long established</h3>
                <img src="<?= formatVerif('img/img-7.avif') ?>" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="Article.php">Voir</a>
            </div>
            <div>
                <h3>It is a long established</h3>
                <img src="img/article2.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#Article1">Voir</a>
            </div>
            <div>
                <h3>It is a long established</h3>
                <img src="img/article3.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#Article1">Voir</a>
            </div>
            <div>
                <h3>It is a long established</h3>
                <img src="img/article4.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#Article1">Voir</a>
            </div>
        </div>
    </section>
    <section id="Blog2">
        <div class="flex">
            <div>
                <h3>It is a long established</h3>
                <img src="img/article1.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="Article.php">Voir</a>
            </div>
            <div>
                <h3>It is a long established</h3>
                <img src="img/article2.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#Article1">Voir</a>
            </div>
            <div>
                <h3>It is a long established</h3>
                <img src="img/article3.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#Article1">Voir</a>
            </div>
            <div>
                <h3>It is a long established</h3>
                <img src="img/article4.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a href="#Article1">Voir</a>
            </div>
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