<?php include 'include/config.php'?>

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
    <section id="Accueil">
        <h2 id="Titre">Accueil</h2>
    </section>
    <section id="Présentation">
        <div class="DivPre">
            <h2>Qui sommes nous ?</h2>
            <div class="DivPres2">
                <div class="DivPres">
                    <img src="img/presentation.jpg" alt="Image">
                    <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <a class="button" href="#P">Plus +</a>
            </div>
        </div>
    </section>
    <section id="Statistiques">
        <div class="DivPre">
            <h2>Statistiques</h2>
            <div class="DivPres3">
                <div class="DivPres">
                    <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </p>
                    <img src="img/stats.jpg" alt="Image">
                </div>
                <a class="button" href="#P">Plus +</a>
            </div>
        </div>
    </section>
    <section id="Blog">
        <div>
            <h2>Blog</h2>
        </div>
        <div class="flex">
            <div>
                <img src="img/article1.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a class="btn" href="articles/article.html">Voir +</a>
            </div>
            <div>
                <img src="img/article2.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a class="btn" href="articles/article2.html">Voir +</a>
            </div>
            <div>
                <img src="img/article3.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a class="btn" href="articles/article3.html">Voir +</a>
            </div>
            <div>
                <img src="img/article4.jpg" alt="Image">
                <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                </p>
                <a class="btn" href="articles/article4.html">Voir +</a>
            </div>
        </div>

    </section>
    <section class="info">
        <section id="ContactAcc">
            <h2>Contact</h2>
            <p>
                71 rue Peter Fink
                <br>
                +330000000
                <br>
                lyon1.lyon@gmail.com
            </p>
        </section>
        <section id="AbonnezVous">
            <h2>S'abonnez</h2>
            <p>
                71 rue Peter Fink
                <br>
            </p>
            <a class="button" href="#P">Plus +</a>
        </section>
    </section>
    <!--        <section id="Blog">-->
    <!--            <h2>Blog</h2>-->
    <!--            <img src="https://picsum.photos/200/300" alt="Image">-->
    <!--            <p>-->
    <!--                It is a long established fact that a reader will be distracted-->
    <!--                by the readable content of a page when looking at its layout.-->
    <!--            </p>-->
    <!--        </section>-->
</main>

<footer>
    <?php include "modules/footer.php" ?>
</footer>

<span class="arrow"></span>

<script src="js/script.js"></script>

</body>
</html>