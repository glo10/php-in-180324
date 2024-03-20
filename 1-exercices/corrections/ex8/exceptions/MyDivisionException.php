<?php

/**
 * N'apporte rien de plus par rapport à la classe mère
 * A titre d'exemple comme les autres
 */
class MyDivisionException extends DivisionByZeroError {
  /**
   * Message par défaut
   * personnalisable à l'instanciation d'un objet en mettant dans le constructeur
   * le message souhaité
   *
   * @var string
   */
  public $message = 'Impossible de diviser par zero';
}