<?php
  session_start();
  var_dump($_SESSION, $_COOKIE);
  // Demande à supprimer les sessions
  if(isset($_GET['delSession'])) {
    session_destroy();
  }
  // Demande à supprimer les cookies
  else if(isset($_GET['delCookie'])) {
    // suppression de cookie il faut antidater le timestamp
    setcookie('fullname', '', time() - 24*3600);
  }  
  // Demande de connexion avec création session et cookie
  else if(isset($_GET['connexion'])) {
    // Mettre des infos dans la session
    $_SESSION['lastname'] = 'Tshimini';
    $_SESSION['firstname'] = 'Glodie';
    $_SESSION['age'] = 32;
    setcookie('fullname', 'Glodie Tshimini');
    session_regenerate_id();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo Cookie Session</title>
</head>
<body>
  <header>
    <p>
      <a href="?delSession=1">Suppression session</a>
    </p>
    <p>
      <a href="?delCookie=1">Suppression cookie</a>
    </p>
    <p>
      <a href="?connexion=1">Connexion</a>
    </p>
  </header>
  <h2>Informations SESSION</h2>
  <!-- via les sessions -->
  <ul>
    <li>Nom : <?= $_SESSION['lastname'];?></li>
    <li>Prénom : <?= $_SESSION['firstname'];?></li>
    <li>Age : <?= $_SESSION['age'];?></li>
  </ul>
  <!--  via les cookies-->
  <h2>Informations cookies</h2>
  <ul>
    <li>Nom : <?= $_COOKIE['fullname'];?></li>
  </ul>
</body>
</html>