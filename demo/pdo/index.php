<?php

require_once dirname(__DIR__).'/../1-exercices/corrections/ex10/back/classes/User.php';
try {
  $requestSQL = 'SELECT id, name FROM country LIMIT 5';
  $db = new PDO('mysql:host=localhost;port=3308;dbname=mvc-rss','root','');
  // avec query
  // $results = $db->query($requestSQL);
  // foreach($results as $row) {
  //   var_dump($row);
  // }
  $pdoStatement = $db->prepare($requestSQL);
  $pdoStatement->execute();
  // avec fetchAll et les options sur le format du résultat
  $resultsFetchAll = $pdoStatement->fetchAll(PDO::FETCH_CLASS, "user");
  var_dump($resultsFetchAll);
} catch(PDOException $e) {
  echo 'erreur PDO '.$e->getMessage();
}
var_dump($db);