<?php

class MyForbiddenException extends DomainException {
  public $message = 'Non autorisé!';
}