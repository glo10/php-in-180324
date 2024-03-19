<?php

/**
 * Classe parente de Bureau et Guichet
 */
class Office {
  protected int $id;
  protected string $name;
  protected function add() : void {
    echo 'add';
  }

  protected function remove() : void {
    echo 'remove';
  }
}