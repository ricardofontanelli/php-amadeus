<?php
/**
 * Amadeus Sample client
 */
include '../src/Amadeus/Client.php';

include 'ini.php';

$ws->currencyConvert('2015-06-14', 'USD', 'BRL');

include 'end.php';
