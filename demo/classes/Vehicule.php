<?php

/**
 * Déclaration d'une classe
 * Tout ce qui est propriétés en privée
 * Généralement les méthodes en public
 * extends permet de matérialiser l'héritage
 */
class Vehicule {
    // propriétés ou attributs
    private string $engine;
    protected string $name;
    // méthodes
  
    public function start() : string {
      return 'start';
    }
}