<?php

class User {
  private int $age;

  public function getGeneration() : string {
    if($this->age <= 10) {
      return 'Enfant';
    } else if($this->age > 10 && $this->age < 18) {
      return 'Adolescent';
    } else if ($this->age < 50) {
      return 'Majeur';
    } else {
      return 'Senior';
    }
  }
}