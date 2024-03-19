<?php

class Desk extends OfficeAbstract {
  private Sector $sector;
  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  /**
   * Get the value of sector
   */ 
  public function getSector()
  {
    return $this->sector;
  }

  /**
   * Set the value of sector
   *
   * @return  self
   */ 
  public function setSector(Sector $sector)
  {
    $this->sector = $sector;

    return $this;
  }
}