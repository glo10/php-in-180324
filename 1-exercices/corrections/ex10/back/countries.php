<?php
require_once dirname(__FILE__).'/classes/Country.php';
try {
  $country = new Country();
  $countries = Country::findAll();
  if(count($countries) === 0) {
    throw new JsonException();
  }
} catch(JsonException $e) {
  $countries = [
    ['id' => 75, 'name' => 'France']
  ];
}
