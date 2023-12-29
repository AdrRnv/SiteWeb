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
  <div class="container">
    <form id="myForm" action="infoAbo.php" method="post" onsubmit="return validateForm()">
      <div class="form-row">
        <div class="input-data">
          <input type="text" placeholder="" name="nom" id="nom">
          <div class="underline"></div>
          <label for="nom">Nom</label>
        </div>
        <div class="input-data">
          <input type="text" placeholder="" name="prenom" id="prenom">
          <div class="underline"></div>
          <label for="prenom">Prénom</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data">
          <input type="email" placeholder="" name="email" id="email">
          <div class="underline"></div>
          <label for="email">Adresse email</label>
        </div>
        <div class="input-data">
          <input type="password" placeholder="" name="password" id="password">
          <div class="underline"></div>
          <label for="password">Mot de passe</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data , Col ">
          <input type="date" placeholder="" name="date" id="date">
          <div class="underline"></div>
          <label for="date">Date de naissance</label>
        </div>
        <div class="input-data">
          <input type="text" placeholder="" name="adresse" id="adresse">
          <div class="underline"></div>
          <label for="adresse">Adresse</label>
        </div>
      </div>
      <div class="form-row">
        <div class="input-data">
          <input type="text" id="postal" pattern="[0-9]{5}" placeholder="" name="codepostal" id="codepostal">
          <div class="underline"></div>
          <label for="codepostal">Code postal</label>
        </div>
        <div class="input-data">
          <input type="text" placeholder="" name="ville" id="ville">
          <div class="underline"></div>
          <label for="ville">Ville</label>
        </div>
      </div>



      <div class="cent">
        <div class="form-ro">
          <div>
            <div class="sscl">
              <input type="radio" id="Homme" name="genre" value="Homme"/>
              <label for="">Homme</label>
            </div>

            <div class="sscl">
              <input type="radio" id="Femme" name="genre" value="Femme"/>
              <label for="">Femme</label>
            </div>

            <div class="sscl">
              <input type="radio" id="NonR" name="genre" value="NonRenseigne"/>
              <label for="">Non renseigné</label>
            </div>
          </div>
        </div>
        <div class="form-ro">
          <div>
            <input type="checkbox" id="sport" name="hobbies[]" value="Sport"/>
            <label for="">Sport</label>
          </div>
          <div>
            <input type="checkbox" id="musique" name="hobbies[]" value="Musique"/>
            <label for="">Musique</label>
          </div>
          <div>
            <input type="checkbox" id="cuisine" name="hobbies[]" value="Cuisine"/>
            <label for="">Cuisine</label>
          </div>
          <div>
            <input type="checkbox" id="serie" name="hobbies[]" value="Serie"/>
            <label for="">Série</label>
          </div>
          <div>
            <input type="checkbox" id="autres" name="hobbies[]" value="Autres"/>
            <label for="">Autres</label>
          </div>
        </div>
        <div class="form-ro">
          <input type="color" name="color">
        </div>
        <div class="form-ro">
          <div>
            <input type="file" name="file" id="file"/>
            <label for="file"></label>
          </div>
        </div>
      </div>



      <div id="Form">
        <button type="submit" id="submitButton">OK</button>
      </div>
    </form>
  </div>
</main>

<footer>
  <?php include "modules/footer.php" ?>
</footer>

<span class="arrow"></span>

<script src="js/script.js"></script>

</body>
</html>
