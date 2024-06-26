<?php

class User implements AddRemoveInterface, UpdateInterface {
  public function __construct
  (
    private int $id,
    private string $lastName,
    private string $firstName,
    private string $birthday,
    private string $address
  ){}

  public function add() : void {
    echo 'add';
  }

  public function remove() : void {
    echo 'remove';
  }

  public function update() : void {
    echo 'update';
  }

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of lastName
   */ 
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
   * Set the value of lastName
   *
   * @return  self
   */ 
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;

    return $this;
  }

  /**
   * Get the value of firstName
   */ 
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
   * Set the value of firstName
   *
   * @return  self
   */ 
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;

    return $this;
  }

  /**
   * Get the value of birthday
   */ 
  public function getBirthday()
  {
    return $this->birthday;
  }

  /**
   * Set the value of birthday
   *
   * @return  self
   */ 
  public function setBirthday($birthday)
  {
    $this->birthday = $birthday;

    return $this;
  }

  /**
   * Get the value of address
   */ 
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Set the value of address
   *
   * @return  self
   */ 
  public function setAddress($address)
  {
    $this->address = $address;

    return $this;
  }
}