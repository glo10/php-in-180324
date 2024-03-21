<?php
try {
  $db = new PDO('mysql:host=localhost;port=3308;dbname=mvc-rss','root','');
  $request = 'SELECT * FROM countr'
} catch(PDOException $e) {
  echo 'erreur pdo '.$e->getMessage();
}
var_dump($db);