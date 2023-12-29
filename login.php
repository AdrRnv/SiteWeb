<!doctype html>
<html lang="fr">
  <?php
  include 'modules/header.php';
  ?>
  <body class="text-center">
    <form class="form-signin" action="infoLogin.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Formulaire de connexion</h1>

      <label for="inputEmail">Adresse Email</label>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword">Mot de passe</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="remember" value="1"> Se souvenir de moi
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
</body>
</html>

