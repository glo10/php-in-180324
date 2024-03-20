<?php

class MySyntaxException extends LogicException {
  public $message = 'Attention nouvelle syntaxe qui n\'est pas retrocompatible';
}