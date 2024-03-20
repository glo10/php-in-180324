<?php

class Country
{
  private const DIR = '/data/countries_and_cities.json';
  public function findAll()
  {
    $content = json_decode(file_get_contents(dirname(__DIR__) . '/../' . self::DIR));
    $countries = [];
    foreach ($content as $country) {
      $countries[] = ['id' => $country->id, 'name' => $country->name];
    }
    return $countries;
  }
}
