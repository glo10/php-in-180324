<?php

/**
 * Utile dans le cas, on doit absolument obtenir un résultat non null d'une opération
 */
class MyNotFoundException extends RuntimeException {
  public $message = 'Valeur n\'existe pas';
}