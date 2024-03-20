<?php

class City
{
  public function findAllFrom(mixed $countryFrom, array $countries)
  {
    foreach ($countries as $country) {
      if (intval($countryFrom['id']) === $country->id) {
        $cities = [];
        foreach ($country->cities as $city) {
          $cities[] = ['id' => $city->id, 'name' => $city->name];
        }
        return json_encode($cities);
      }
    }
  }
}
