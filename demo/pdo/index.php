<?php

try {
  $requestSQL = 'SELECT id, name FROM country WHERE id=? AND name=?';
  /**
   * Req préparée avec tableau numérique SELECT id, name FROM country WHERE id=? AND name=?'
   * Respectez absolument l'ordre
   * parametres avec $parameters = [7, "Angola"]
   */

  /**
   * Req préparée avec tableau associatif SELECT id, name FROM country WHERE id=:id AND name=:name'
   * L'ordre n'a pas d'importance
   * Parametres avec les ?$parameters = [":id" => 7, ":name" => "Angola"]
   */

  /**
   * Avec un LIKE
   * SELECT id, name FROM country WHERE name LIKE :name"
   * $parameters = [':name' => '%Angola%']; ou si c'est une variable [':name' => '%'.$name.'%']
   */
  $db = new PDO('mysql:host=localhost;port=3308;dbname=mvc-rss','root','');
  // avec query
  // $results = $db->query($requestSQL);
  // foreach($results as $row) {
  //   var_dump($row);
  // }
  $pdoStatement = $db->prepare($requestSQL);
  $parameters = [7, "Angola"];
  if($pdoStatement->execute($parameters)) { 
    // avec fetchAll et les options sur le format du résultat
    $resultsFetchAll = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultsFetchAll);
  }
} catch(PDOException $e) {
  echo 'erreur PDO '.$e->getMessage();
}
var_dump($db);