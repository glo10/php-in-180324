<?php

/**
 * Toutes les méthodes sont abstraites
 * C'est un contrat à remplir par chaque classe
 * qui va implémenter l'interface en définissant
 * le corps de toutes les méthodes
 */
interface CrudInterface {
  function create($entity = null, $isNew = true) : bool;
  function read();
  function update();
  function delete();
} 