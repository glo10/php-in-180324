<?php

// Déclaration
// ?int veut dire un int ou null
/**
 * Introduction
 *
 * @param string $firtName prénom
 * @param string|array $lastNames nom
 * @param integer|null $age age
 * @return void
 */
function hi(string $firtName, string|array $lastNames, ?int $age = null) : string {
  $ltn = '';
  if(is_array($lastNames)) {
    foreach($lastNames as $lastName) {
      $ltn .= $lastName. ' ';
    }
  } else {
    $ltn = $lastNames;
  }
  return $firtName.' '.$ltn.' '.$age;
}

function hello(string $firtName, string|array $lastNames, ?int $age = null) : string {
  $lastName = implode(" ", $lastNames);
  return $firtName.' '.$lastName.' '.$age;
}
// Exécution
$glodie = hi('Eric', array('Jean', 'Marque'));
var_dump($glodie);
echo 'Avec hello :'. hello('John', array('Doe', 'minique')). '<br>';
echo 'Avec hi '. hi('John', array('Doe', 'Jean', 'guerin'));