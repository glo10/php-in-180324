<?php

class ProductBefore8  {
  // Avant PHP 8
  private string $name;
  private string $description;
  public function __construct(string $name, ?string $description) {
    $this->name = $name;
    $this->description = $description;
  }
}

/**
 * Constructeur compacte depuis PHP 8 qui donne exactement
 * le même résultat que le code ci-dessus
 */
class ProductSince8  {
  public function __construct(private string $name, private ?string $description) {}
}