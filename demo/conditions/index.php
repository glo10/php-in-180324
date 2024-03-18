<?php

$hour = 6;
// Condition if..elseif..else 
if($hour >= 6 && $hour <= 12) {
  echo 'Matin';
} else if($hour > 12 && $hour < 18) {
  echo 'Aprem';
} else {
  echo 'Soir';
}

// Sans accolade s'il y a qu'une seule ligne d'exécution
$age = 24;
if($age >= 10 AND $age < 18)
  echo 'Enfant';
else
  echo 'Adulte';

// switch
switch($hour) {
  case 6:
  case 7:
  case 8:
  case 9:
  case 10:
  case 11:
  case 12:
    echo 'Matin';
  break;
  case $hour > 12 && $hour <= 18:
    echo 'Aprem';
  break;
  default:
    echo 'Soir';
  break;
}
// ternaire raccouri if/else
echo $age >= 18 ? 'Majeur': 'Mineur';