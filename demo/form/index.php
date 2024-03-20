<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo formulaire</title>
</head>
<body>
  <!-- encypte attribut obligatoire qui permet l'envoi des fichiers et forcement en POST -->
  <form method="POST" action="submit.php" enctype="multipart/form-data">
    <input
      type="text"
      name="lastname"
      placeholder="Votre nom">
    <input type="text" name="firstname"
      placeholder="Votre prénom">
    <input type="file" name="image">
    <input type="submit" value="Valider">
  </form>
</body>
</html>