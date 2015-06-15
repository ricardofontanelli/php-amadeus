<?php
/**
 * Amadeus Sample client
 */
include '../src/Amadeus/Client.php';

include 'ini.php';

$ws->currencyConvert('USD', 'BRL');

include 'end.php';
