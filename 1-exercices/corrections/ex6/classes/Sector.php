<?php

class Sector {
  private int $id;
  private string $name;
  private string $city;
  /**
   * @var array of Office
   */
  private array $offices;

  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }
}