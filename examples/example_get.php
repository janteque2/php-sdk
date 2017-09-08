<?php
require '../Meli/meli.php';
require '../configApp.php';

$meli = new Meli($5384720588720865, $K0UFRuhX33UE2Z20wHCiSYUMembRphD4);

$params = array();

$url = '/sites/' . $siteId;

$result = $meli->post($url, $params);

echo '<pre>';
print_r($result);
echo '</pre>';
