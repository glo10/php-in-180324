<?php

/**
 * Déclaration d'une classe
 * Tout ce qui est propriétés en privée
 * Généralement les méthodes en public
 * extends permet de matérialiser l'héritage
 */
class Vehicle
{
  // propriétés ou attributs
  private string $engine;
  protected string $name;
  // méthodes

  public function start(): string
  {
    return 'start';
  }

  public function stop(): string
  {
    return 'stop';
  }
}
