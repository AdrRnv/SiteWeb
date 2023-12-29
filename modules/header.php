<?php session_start(); ?>
    <nav>
        <input id="menu__toggle" type="checkbox" >
        <label class="menu__btn" for="menu__toggle">
            <span></span>
        </label>
        <ul class="menu">
        
            <?php
                if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
                    echo '<li><a href="deco.php" class="nom" >Déconnexion</a></li>';
                    echo '<li><a class="nom" >Bienvenue ' . $_SESSION['user_name'] . '</a></li>';
                } else {
                    echo '<li><a href="login.php" class="nom" >Connexion</a></li>';
                }
            ?>




            <li><a href="/index.php"  
            class="nom <?= (basename($_SERVER['REQUEST_URI']) == "index.php") ? ' active' : ''; ?>">Accueil</a></li>
            <li><a href="/index.php#Présentation" class="nom" >Présentation</a></li>
            <li><a href="/contact.php"
            class="nom <?= (basename($_SERVER['REQUEST_URI']) == "contact.php") ? ' active' : ''; ?>">Contact</a></li>
            <li><a href="/AbonnezVous.php" 
            class="nom <?= (basename($_SERVER['REQUEST_URI']) == "AbonnezVous.php") ? ' active' : ''; ?>">Abonnez-vous</a></li>
            <li><a href="/statistiques.php" 
            class="nom <?= (basename($_SERVER['REQUEST_URI']) == "statistiques.php") ? ' active' : ''; ?>">Statistiques</a></li>
            <li><a href="/addArt.php" 
            class="nom <?= (basename($_SERVER['REQUEST_URI']) == "addArt.php") ? ' active' : ''; ?>">+Article</a></li>
            <li class="dropdown">
                <a href="/blog.php" class="nom <?= (basename($_SERVER['REQUEST_URI']) == "blog.php") ? ' active' : ''; ?>">Blog</a>
                <ul>
                    <li><a href="articles/article.html" class="nom" >Article 1</a></li>
                    <li><a href="articles/article2.html" class="nom" >Article 2</a></li>
                    <li><a href="articles/article3.html" class="nom" >Article 3</a></li>
                    <li><a href="articles/article4.html" class="nom" >Article 4</a></li>
                </ul>
            </li>

        </ul>
    </nav>