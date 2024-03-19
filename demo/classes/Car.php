<?php

class Car extends Vehicule {
  private string $brand;
  // hérite des propriétés et méthodes protected et/ou public
  public function show() {
    // Accéder à la propriété parente name de Vehicule
    parent::$name;
  }

  public function run() {
    // Accéder à la propriété parente start()
    parent::start();
  }
}