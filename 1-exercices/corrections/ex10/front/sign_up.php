<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <title>Inscription</title>
</head>
<body>
  <main class="container">
    <h1>Inscription</h1>
    <form autocomplete="off" action="../back/submit_sign_up.php" method="POST" enctype="multipart/form-data">
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="text"
        class="form-control"
        name="lastname"
        placeholder="Nom"
        data-format="Au moins 2 caractères, aucun chiffre"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="text"
        class="form-control"
        name="firstname"
        placeholder="Prénom"
        data-format="Au moins 2 caractères, aucun chiffre"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="email"
        class="form-control"
        name="email"
        placeholder="email"
        data-format="Exemple contact@tshimini.fr, extension maximum 10 caractères"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="password"
        class="form-control"
        name="pwd"
        placeholder="Mot de passe"
        data-format="Entre 15 et 36 caractères (miniscule, majuscule, chiffres et caractères spéciaux &amp; $ + - * / # ~ € % ^ ! - _`)"
        value="$Dhfukeps57kflfieemd@"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        type="number"
        class="form-control"
        name="age"
        placeholder="Age"
        data-format="Age compris entre 14 et 130 ans"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        class="form-control"
        name="country"
        type="text"
        placeholder="Pays"
      >
    </div>
    <div class="my-3">
      <p class="form-help"></p>
      <input
        class="form-control"
        name="city"
        type="text"
        placeholder="Ville"
      >
    </div>
    <div class="my-3">
      <label for="picture" class="form-label">Photo de profil</label>
      <input class="form-control" type="file" id="picture" name="picture">
    </div>
    <div class="my-3 align-right">
      <input
        type="submit"
        value="Valider"
        class="btn btn-success me-5"
        data-endpoint="signup"
      >
      <a href="index.php" class="btn btn-info">Connexion</a>
    </div>
  </form>
</main>
</body>
</html>