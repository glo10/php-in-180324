<?php
// un tableau peut contenir des valeurs de diff. types en PHP, ça ne pose aucun problème
$user = [
  'glodie', // index 0
  10, // index 1
  true, // index 2
  false // index 3
];
// Accéder à 10
echo 'echo 2eme élément du tableau '. $user[1];
// Ajout d'un nouvel élément
$user[] = 'Paris'; // automatiquement(géré par PHP) index 4
$user[6] = 'Marseille'; // ici le 5 est sauté mais toujours disponible si on a besoin plus-tard
$user[] = 'Lyon';
$user[5] = 'Lille';
$user['age'] = 35;
var_dump($user);
// notations array et [] sont identiques
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