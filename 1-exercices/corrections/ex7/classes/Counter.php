<?php

class Counter extends OfficeAbstract {
  private Desk $desk;
  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  /**
   * Get the value of desk
   */ 
  public function getDesk()
  {
    return $this->desk;
  }

  /**
   * Set the value of desk
   *
   * @return  self
   */ 
  public function setDesk($desk)
  {
    $this->desk = $desk;

    return $this;
  }
}