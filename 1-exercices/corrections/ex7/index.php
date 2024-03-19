<?php
  try {
    try {
      require_once dirname(__DIR__).'/exd7/interfaces/AddRemoveInterface.php';
    } catch(Error $e) {
      echo 'Erreur de type Error fichier interface est '.$e->getMessage();
      require_once dirname(__DIR__).'/ex7/interfaces/AddRemoveInterface.php';
    } catch(InvalidArgumentException $e) {
      echo 'Erreur fichier interface est '.$e->getMessage();
      require_once dirname(__DIR__).'/ex7/interfaces/AddRemoveInterface.php';
    }
    
    echo 'TOTO';
    try{
      require_once dirname(__DIR__).'/ex7/classes/Category.php';
      $category = new Category(1, 'Imprimantes', 'Laser');
      var_dump($category);
    } catch(Error $e) {
      echo 'Erreur fichier Category est '.$e->getMessage();
    }
    
  } catch(Exception $e) {
    echo 'Error globale '.$e->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Accueil</title>
</head>
<body>
  <h1>Accueil</h1>
</body>
</html>