<?php

require __DIR__ . '/../../vendor/autoload.php';

use \GuzzleHttp\Exception\ClientException as GuzzleClientException;

$args = array(
    'PRIVATE_TOKEN' => 'YOUR_PRIVATE_TOKEN',
    'CLIENT_ID' => 'CLIENT_ID',
    'CLIENT_SECRET' => 'CLIENT_SECRET'
);

try {
    $chargeService = new TamoJuno\Charge($args);
    $charge = $chargeService->createCharge([
        'charge' => [
            'description' => 'First created charge in PHP',
            'amount' => '10.00'
        ],
         'billing' => [
             'name' => 'John Doe',
             'document' => '12345678910',
             'email' => 'mustbevalid@valid.com.br',
             'birthDate' => '1970-01-01',
             'notify' => false
         ]
    ]);
    print_r($charge);
} catch (GuzzleClientException $e) {
    print_r($e->getResponse()->getBody()->getContents());
}