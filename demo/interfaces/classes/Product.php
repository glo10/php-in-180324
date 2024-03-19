<?php
/**
 * Attention ici il faut implémenter toutes les méthodes abstraites de la classe parente et des interfaces
 * sinon la classe Product ne pourra pas être instancié par PHP
 */
class Product extends ProductCore implements CrudInterface, ListInterface {
  use ListTrait;
  private string $name;
  private string $description;
  function create($entity = null, $isNew = true) : bool {
    return true;
  }

  /**
   * Généré automatiquement avec une extension PHP de votre choix à télécharger depuis Visual Studio Code
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }
}
// Attention 1 classe = un fichier 
// Et on sépare également la structure de la classe de son éxécution autrement dit l'exécution (instanciation d'un ou plusieurs objets s'effectue dans un autre fichier)
$product1 = new Product();
$product1->getList();