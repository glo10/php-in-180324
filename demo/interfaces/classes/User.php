<?php

class User implements CrudInterface {
  use ListTrait;
}

$user1 = new User();
var_dump($user->getList());