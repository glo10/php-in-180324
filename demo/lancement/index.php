<?php

// Déclaration de variable

$name = 'Toto';
// concaténation
echo '<h1> HELLO WORLD '.$name.'</h1>';
// concaténation avec les guillemets doubles
echo "<h1> HELLO WORLD $name</h1>";

$user = [
  'glodie', // index 0
  10, // index 1
  true, // index 2
  false // index 3
];
// Accéder à 10
echo 'echo 2eme élément du tableau'. $user[1];
// Ajout d'un nouvel élément
$user[] = 'Paris'; // automatiquement(géré par PHP) index 4
$user[6] = 'Marseille'; // ici le 5 est sauté mais toujours disponible si on a besoi
$user[] = 'Lyon';
$user[5] = 'Lille';
$user['age'] = 35;
var_dump($user);
// array et [] sont identiques
$userAssoc = array(
  'firstname' => 'glodie',
  'age' => 10,
  'isParis' => true,
  'isNice' => false
);
// Ajout d'un nouvel élément
$userAssoc['city'] = 'Paris';
var_dump($tab);
echo 'Prénom : '.$tab2['firstname'];

// Opérateurs combinés

$nb1 = 5;
$nb1 += 7; // exactement la même chose que $nb1 = $nb1 + 7
