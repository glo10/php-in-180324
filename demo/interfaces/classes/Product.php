<?php

class Product extends ProductCore implements CrudInterface, ListInterface {
  use ListTrait;
}

$product1 = new Product();
$product1->getList();