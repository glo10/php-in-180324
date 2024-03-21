<?php

class Crypt {
  public function __construct(private ?string $algo = PASSWORD_BCRYPT, private array $options = []) {
    $this->algo = $algo;
    $this->options = $options;
  }

  public function hash($plain) : string {
    return password_hash($plain, $this->algo, $this->options);
  }

  public function verify(string $plain, string $hash) : bool {
    return password_verify($plain, $hash);
  }
}