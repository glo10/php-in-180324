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
 * Constructeur compacte
 */
class ProductSince8  {
  public function __construct(private string $name, private ?string $description) {}
}