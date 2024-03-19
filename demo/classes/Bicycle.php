<?php
class Bicycle extends Vehicle {
  private string $color;
  // De manière implicite par le lien de l'héritage on
  // va hériter des propriétés et méthodes public et protégé
  // Donc Bicyle a accès à start(), $name mais n'a pas accès à $engine (qui est privée)
  // Inutile si on n'apporte rien de nouveau par rapport à la méthode parente
  public function start() : string {
    return parent::start();
  }

  public function stop() : string {
    $fromParent =  parent::stop();
    return 'La réponse est '.$fromParent;
  }
}