<?php
/**
 * Classe abstraite possède au moins une méthode abstraite
 * et il ne peut pas être instancié (on ne peut pas faire new ProductCore)
 * 
 */
abstract class ProductCore {
  abstract function getElements(); 
}