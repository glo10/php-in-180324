<?php
$baseDir = dirname(__DIR__).'/../1-exercices/corrections/ex7';
  try {// Erreur plus éloigné des fonctions susceptibles de déclencher une exception
    try {
      // erreur chemin
      require_once $baseDir.'/interfaces/NotFoundAddRemoveInterface.php';
    } catch(Error $e) { // capture erreur de type Error (plus spécifique) et traitement de l'erreur en changeant le chemin
      echo 'Erreur de type Error : '.$e->getMessage();
      require_once $baseDir.'/interfaces/AddRemoveInterface.php';
    } catch(Exception $e) { // capture erreur de type Exception (plus globale) s'il est déclenché
      echo 'Erreur de type Exception : '.$e->getMessage();
    }
    echo 'Affichage'; // s'affiche parce que les cas d'erreurs potentiels ont été gérées dans le cas contraire il n'aurait pas pû s'afficher
    try{
      // On met tout ici parce qu'il y a une dépendance entre les 3 lignes de code suivantes
      // 1. La classe Category fait appel à l'interface AddRemoveInterface qui doit être chargé avant
      // 2. L'instance de l'objet est possible que si la classe et l'interface ont été chargées
      // 3. Enfin le var_dump s'affichera uniquement si l'objet $category a pu être instanciée correctement (dépend des conditions précédentes)
      require_once $baseDir.'/classes/Category.php';
      $category = new Category(1, 'Imprimantes', 'Laser');
      var_dump($category);
    } catch(Error $e) {
      echo 'Erreur fichier Category est '.$e->getMessage();
    }
    
  } catch(Exception $e) {
    echo 'Error le plus haut et le plus éloigné '.$e->getMessage();
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Accueil</title>
</head>
<body>
  <h1>Accueil</h1>
</body>
</html>