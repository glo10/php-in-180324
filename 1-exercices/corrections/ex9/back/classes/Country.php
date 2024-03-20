<?php

class Country
{
  private const DIR = '/data/countries_and_cities.json';
  public static function findAll()
  {
    $content = self::getXMLContent(dirname(__DIR__) . '/' . self::DIR);
    $countries = [];
    foreach ($content as $country) {
      $countries[] = ['id' => $country->id, 'name' => $country->name];
    }
    return $countries;
  }

  public static function getXMLContent($directory) {
    return json_decode(file_get_contents($directory));
  }
}
