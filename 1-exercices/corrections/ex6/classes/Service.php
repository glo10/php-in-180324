<?php

class Service {
  private int $id;
  private string $name;
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