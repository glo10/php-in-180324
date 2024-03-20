<?php

require_once dirname(__FILE__).'/exceptions/MyDivisionException.php';
require_once dirname(__FILE__).'/exceptions/MyForbiddenException.php';
require_once dirname(__FILE__).'/exceptions/MyNotFoundException.php';
require_once dirname(__FILE__).'/exceptions/MySyntaxException.php';
require_once dirname(__FILE__).'/classes/Math.php';
require_once dirname(__FILE__).'/classes/MyArray.php';
require_once dirname(__FILE__).'/classes/User.php';

$math = new Math();
// division par zero
try {
  $result = $math->divide(10, 0);
  $response =  'ne s\'affiche pas car à cause de l\'exception au-dessus on quitte le bloc try ';
} catch(MyDivisionException $e) {
  echo $e->getMessage().'<br>';
  echo $e->getTraceAsString().'<br>';
} finally {// attention au finally (s'execute quoi qu'il arrive donc il peut être source d'erreur)
  // ici $result et $response n'existe pas donc on aura un warning mais pas d'erreur qui arrête brusquement le script
  var_dump($result, $response);
}

// fibonacci
try {
  $parameter = '4';
  $results = $math->fibonacci($parameter);
  var_dump($results);
} catch(TypeError $e) {
  if(is_numeric($parameter)) {
    $parameter = (int) $parameter; // caster
    $results = $math->fibonacci($parameter);
  } else {
    echo 'Erreur : '.$e->getMessage();
  }
}
finally {
}

// User
try {
  $u1 = new User('17');
  $u2 = new User('19');
  $u3 = new User(18);
  var_dump($u1->getGeneration(), $u2->getGeneration(),$u3->getGeneration());
} catch(MyForbiddenException $e) {
  // Gestion de l'exception en supprimant l'objet par exemple
  unset($u1);
  echo 'Erreur user : '.$e->getMessage();
} finally {
  // $u1 n'existe plus ici supprimé dans le bloc catch
  var_dump($u1, $u2, $u3);
}