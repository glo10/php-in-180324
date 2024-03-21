<?php

class UserFormValidator {
  private ?User $user;
  private static array $REGEX = [
    "email" => "/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i",
    "name" => "/^[a-z]+(?!_)(\s|-)?[a-z]+\$/i",
    "age" => "/^(1[0-2][0-9]|1[4-9]|[2-9][0-9]|130)\$/",
    "location" => "/^[a-z]+(?!_)(\s|-)?[a-z0-9|\s]+\$/i",
    "password" => "/^(?!abcdef|qwerty|azerty|123456)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[&\$+\-*\/#~€%^!-_]).{15,36}\$/"
  ];

  public function __construct(User $user = null)
  {
    $this->setUser($user);
  }

  public function checkwithRegex() : bool {
    return $this->checkEmail() &&
      $this->checkPassword() &&
      $this->checkName('lastname') &&
      $this->checkName('firstname') &&
      $this->checkAge() &&
      $this->checkLocation('city') &&
      $this->checkLocation('country');
  }

  public function isNotFullyFilled() {
    return 
      $this->checkIsEmptyProperty($this->user->getFirstname()) ||
      $this->checkIsEmptyProperty($this->user->getLastname()) ||
      $this->checkIsEmptyProperty($this->user->getPassword()) ||
      $this->checkIsEmptyProperty($this->user->getCity()) ||
      $this->checkIsEmptyProperty($this->user->getCountry()) ||
      $this->checkIsEmptyProperty($this->user->getAge());
  }

  public function setUser(?User $user) {
    $this->user = $user;
    return $this;
  }

  private function checkIsEmptyProperty(int|string $property) {
    return empty($property) || $property == '';
  }

  private function checkEmail() {
    return preg_match(self::$REGEX['email'], $this->user->getEmail()) === 1;
  }

  private function checkAge() {
    return preg_match(self::$REGEX['age'], $this->user->getAge()) === 1;
  }

  private function checkPassword() {
    return preg_match(self::$REGEX['password'], $this->user->getPassword()) === 1;
  }

  private function checkName($key) {
    $name = '';
    switch($key) {
      case 'firstname':
        $name = $this->user->getFirstName();
      break;
      case 'lastname':
        $name = $this->user->getLastName();
      break;
      default:
        throw new \Error('wrong key');
    }
    return preg_match(self::$REGEX['name'], $name) === 1;
  }

  private function checkLocation($key) {
    $location = '';
    if($this->user->getCountry() === null) {
      throw new Error('Le pays ne peut pas être nulle');
    }

    if($this->user->getCity() === null) {
      throw new Error('La ville ne peut pas être nulle');
    }
    switch($key) {
      case 'country':
        $location = $this->user->getCountry();
      break;
      case 'city':
        $location = $this->user->getCity();
      break;
      default:
        throw new Error('wrong key');
    }
    return preg_match(self::$REGEX['location'], $location) === 1 || is_numeric($location);
  }
}