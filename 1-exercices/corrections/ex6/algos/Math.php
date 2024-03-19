<?php

class Math
{
  public function fibonacci(?int $max = 89): array
  {
    $values = [1, 2];
    $next = 1;
    for ($i = 0; $next < $max; $i++) {
      $next = $values[$i] + $values[$i + 1];
      if ($next <= $max) {
        $values[] = $next;
      }
    }
    return $values;
  }

  public function multiply(int $table, int $end = 10): string
  {
    $results = [];
    for ($i = 1; $i <= $end; $i++) {
      $result = $table * $i;
      $results[$i] = "$table*$i=$result";
    }
    return implode(';', $results);
  }

  /**
   * sum of numbers
   *
   * @param array ...$numbers all arguments
   * @return float|int
   * @see avant le spread operator ... il fallait utiliser la fonction suivante func_get_args https://www.php.net/manual/en/function.func-get-args.php
   */
  public function add(...$numbers)
  {
    $sum = 0;
    foreach ($numbers as $nb) {
      $sum += $nb; // operateur combiné
    }
    return $sum;
  }

  /**
   * Substraction
   *
   * @param array ...$numbers all arguments
   * @return int|float
   */
  public function minus(...$numbers)
  {
    $m = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
      $m -= $numbers[$i]; // operateur combiné
    }
    return $m;
  }

  /**
   * Multiply
   *
   * @param array ...$numbers all arguments
   * @return int|float
   */
  public function multiplyNumbers(...$numbers)
  {
    $m = 1;
    foreach ($numbers as $nb) {
      $m *= $nb;
    }
    return $m;
  }

  /**
   * division
   *
   * @param integer|float $nb1
   * @param integer|float $nb2
   * @return int|float|string
   */
  public function divide(int|float $nb1, int|float $nb2): mixed
  {
    if ($nb2 != 0) return $nb1 / $nb2;
    else return 'Division par 0 impossible ';
  }

  /**
   * modulo
   *
   * @param integer|float $nb1
   * @param integer|float $nb2
   * @return integer|float
   */
  public function modulo(int|float $nb1, int|float $nb2)
  {
    return $nb1 % $nb2;
  }
}
