<?php
require_once dirname(__FILE__) . '/classes/City.php';

$countryFrom =  json_decode(file_get_contents("php://input"), true);
$directory = dirname(__DIR__) . '/back/data/countries_and_cities.json';
$city = new City();
$countries = Country::getXMLContent($directory);
echo $city->findAllFrom($countryFrom, $countries);
