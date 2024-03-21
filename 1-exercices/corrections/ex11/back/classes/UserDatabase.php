<?php

class UserDatabase
{
  public function __construct(private Crypt $crypt, private User $user, private DB $db){}

  public function signup(): array
  {
    try {
      if ($this->save() === 'ok') {
        return ['message' => 'ok'];
      }
      return  ['message' => DB::ERRORS_MESSAGES['request']];
    } catch (Exception | Error $e) {
      return ['message' => $e->getMessage()];
    }
  }

  public function save() : string {
    $sql = 'INSERT INTO 
    user(lastname, firstname, email, password, age, city)
    VALUES(:lastname, :firstname, :email, :password, :age, :city)';
    $params =  [
      ':lastname' => $this->user->getLastName(),
      ':firstname' => $this->user->getFirstname(),
      ':email' => $this->user->getEmail(),
      ':password' => $this->crypt->hash($this->user->getPassword()),
      ':age' => (int) $this->user->getAge(),
      ':city' => (int) $this->user->getCity()
    ];
    return $this->db->connect()->request($sql, $params);
  }
}
