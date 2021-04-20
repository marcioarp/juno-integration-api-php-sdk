<?php

require __DIR__ . '/../../vendor/autoload.php';

use \GuzzleHttp\Exception\ClientException as GuzzleClientException;

$args = array(
    'PRIVATE_TOKEN' => 'YOUR_PRIVATE_TOKEN',
    'CLIENT_ID' => 'CLIENT_ID',
    'CLIENT_SECRET' => 'CLIENT_SECRET'
);

try {
    $balanceService = new TamoJuno\Balance($args);
    $balance = $balanceService->all();
    print_r($balance);
} catch (GuzzleClientException $e) {
    print_r($e->getResponse()->getBody()->getContents());
}
