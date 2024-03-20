<?php

class User {
  public function __construct(private $age) {}

  public function getGeneration() : string {
    if($this->age < 18) {
      throw new MyForbiddenException();
    } else if ($this->age < 50) {
      return 'Majeur';
    } else {
      return 'Senior';
    }
  }
}