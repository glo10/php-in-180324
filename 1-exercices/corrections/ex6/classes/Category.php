<?php

class Category {
  private int $id;
  private string $name;
  private string $type;
  /**
   * @var array of Archive;
   */
  private array $archives;
  
  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }
}