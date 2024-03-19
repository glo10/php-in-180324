<?php

class Product extends ProductCore implements CrudInterface, ListInterface {
  use ListTrait;
  private string $name;
  private string $description;
  function create($entity = null, $isNew = true) : bool {
    return true;
  }

  /**
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

$product1 = new Product();
$product1->getList();