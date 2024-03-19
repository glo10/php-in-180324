<?php

class Archive {
  private int $id;
  private string $name;
  private DateTime $date;
  private int $size;
  
  public function create() : void {
    echo 'create';
  }

  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  public function update() : void {
    echo 'update';
  }

  public function find() : void {
    echo 'find';
  }
}