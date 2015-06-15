<?php
/**
 * Amadeus Sample client
 */
include_once( '../src/Amadeus/Client.php' );

include_once( 'ini.php' );

$ws->currencyConvert( '2015-06-14', 'USD', 'BRL' );

include_once( 'end.php' );
