<?php

class User {
  private int $id;
  private string $lastName;
  private string $firstName;
  private string $birthday;
  private string $address;
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

  public function update() : void {
    echo 'update';
  }
}