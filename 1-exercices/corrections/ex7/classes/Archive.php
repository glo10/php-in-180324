<?php

class Archive implements AddRemoveInterface, UpdateInterface, CreateFindInterface {
  public function __construct(
    private int $id,
    private string $name,
    private DateTime $date,
    private int $size,
    private Service $service,
    private Category $category,
    private User $user,
    private Counter $counter
  ) {}
    
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
  public function setId(int $id)
  {
    $this->id = $id;
    return $this;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName(string $name)
  {
    $this->name = $name;
    return $this;
  }

  /**
   * Get the value of date
   */ 
  public function getDate()
  {
    return $this->date;
  }

  /**
   * Set the value of date
   *
   * @return  self
   */ 
  public function setDate(Datetime $date)
  {
    $this->date = $date;
    return $this;
  }

  /**
   * Get the value of size
   */ 
  public function getSize()
  {
    return $this->size;
  }

  /**
   * Set the value of size
   *
   * @return  self
   */ 
  public function setSize(int $size)
  {
    $this->size = $size;
    return $this;
  }

  /**
   * Get the value of service
   */ 
  public function getService()
  {
    return $this->service;
  }

  /**
   * Set the value of service
   *
   * @return  self
   */ 
  public function setService(Service $service)
  {
    $this->service = $service;
    return $this;
  }

  /**
   * Get the value of category
   */ 
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Set the value of category
   *
   * @return  self
   */ 
  public function setCategory(Category $category)
  {
    $this->category = $category;
    return $this;
  }

  /**
   * Get the value of user
   */ 
  public function getUser()
  {
    return $this->user;
  }

  /**
   * Set the value of user
   *
   * @return  self
   */ 
  public function setUser(User $user)
  {
    $this->user = $user;
    return $this;
  }

  /**
   * Get the value of counter
   */ 
  public function getCounter()
  {
    return $this->counter;
  }

  /**
   * Set the value of counter
   *
   * @return  self
   */ 
  public function setCounter(Counter $counter)
  {
    $this->counter = $counter;
    return $this;
  }
}