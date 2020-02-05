<?php
require 'vendor/autoload.php';
use Geocoder\Query\GeocodeQuery;

$httpClient = new \Http\Adapter\Guzzle6\Client();

$provider = new \Geocoder\Provider\GoogleMaps\GoogleMaps($httpClient, null, '10a49b5255ed77e1f9a85913f42c37e2');

$result = $geocoder->geocodeQuery(GeocodeQuery::create('Buckingham Palace, London'));
?>  