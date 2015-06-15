<?php
/**
 * Amadeus Sample client
 */
include '../src/Amadeus/Client.php';
use Amadeus\Client;
// Instantiate the Amadeus class (Debug enabled)
$ws = new Client('AmadeusWebServices.wsdl', true);
// Authenticate
$ws->securityAuthenticate([YOUR_SOURCE], [YOUR_ORIGIN], [YOUR_PASSWORD], [PASSWORD_LENGTH], [ORGANIZATION_ID]);
