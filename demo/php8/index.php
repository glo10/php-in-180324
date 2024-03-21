<?php

// Arguments nommés

function welcome (string $firstname = 'NC', string $lastname = 'NC', int $age = 0) : void {
  echo $firstname. ' '.$lastname .' '.$age.' an(s) <br>';
}

// avant php 8 il faut respecter l'ordre des params même lorsqu'elles sont vides ou optionnelles
// welcome('', '', 10);

// Avec PHP 8 pas besoin de respecter l'ordre on donne les attributs nommés : valuer
// welcome(age: 43);
// welcome(age: 43, lastname: 'Tshimini');

// match
$age = 18;
$versionPHP = '8.3';
switch($versionPHP) {
  case '8':
  case 8:
  case 8.1:
    echo 'version avec switch 8.<br>';
  break;
  case 7:
    echo '7.<br>';
  break;
}

// match

$result = match($versionPHP) {
  8, '8', 8.1, '8.2' => 'version 8 avec match',
  default => 'Autre version'
};

echo $result;


match($versionPHP) {
  8, '8', 8.1, '8.2' => print 'version 8 avec match',
  default => print 'Autre version'
};

$result2 = match (true) {
  $age >= 50 && true => 'senior',
  $age >= 18 => 'adulte',
  $age >= 11 => 'Ado',
  default => 'Enfant',
};

var_dump($result2);

