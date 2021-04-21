<?php

require __DIR__ . '/../../vendor/autoload.php';

use \GuzzleHttp\Exception\ClientException as GuzzleClientException;

$args = array(
    'PRIVATE_TOKEN' => 'YOUR_PRIVATE_TOKEN',
    'CLIENT_ID' => 'CLIENT_ID',
    'CLIENT_SECRET' => 'CLIENT_SECRET'
);

define('IDNA_DEFAULT',0); //para evitar um prob. com o pacote guzzlehttp


$fields = ([
    'type' => 'PAYMENT',
    'name' => 'John Doe',
    'document' => '12345678910',
    'email' => 'mustbevalid@valid.com.br',
    'businessArea' => 2029, // Get a list by calling getBusinessArea method
    'phone' => '4130139650',
    'linesOfBusiness' => 'Sample description',
    'motherName' => 'Lady Marmelade',
    'monthlyIncomeOrRevenue' => 1000.00,
    'address' => [
        "..."
    ],
    'bankAccount' => [
        "..."
    ],
]);

try {
    $digitalAccountService = new \TamoJuno\DigitalAccount($args);
    $newAccount = $digitalAccountService->createDigitalAccount($fields);
    print_r($newAccount);
} catch (GuzzleClientException $e) {
    print_r($e->getResponse()->getBody()->getContents());
}
