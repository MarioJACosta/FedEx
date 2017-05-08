<?php

date_default_timezone_set('UTC');

include_once (dirname(__FILE__) . '/config.php');
include_once (dirname(__FILE__) . '/vendor/autoload.php');

use FedEx\ComplexType;

// paremeters -------------------------------------------------------
//$key            = filter_input(INPUT_GET, 'key');
//$password       = filter_input(INPUT_GET, 'password');
//$meterNumber    = filter_input(INPUT_GET, 'meter');
//$accountNumber  = filter_input(INPUT_GET, 'shipAccount');
//$data           = urldecode(filter_input(INPUT_GET, 'data'));

$key = key;
$password = password;
$meterNumber = meterNumber;
$accountNumber = accountNumber;
$data = explode('|', addressValues);
//$data = explode('|', groundCloseValues);
//$data = explode('|', groundCloseWithDocValues);
//$data = explode('|', groundCloseReportsReprintValues);
//$data = explode('|', smartPostCloseValues);
//$data = explode('|', confirmConsolidationValues);
//$data = explode('|', deleteOpenConsolidationValues);
//$data = explode('|', validatePostalValues);
//$data = explode('|', rateValues);
//$data = explode('|', pickupAvailabilityValues);
//$data = explode('|', createPickupValues);
//$data = explode('|', createFreightPickupValues);
//$data = explode('|', cancelPickupValues);
//$data = explode('|', validateShipmentValues);
//$data = explode('|', deleteShipmentValues);
//$data = explode('|', dgldValues);
//$data = explode('|', validateAvailabilityValues);

// trace to soap client ---------------------------------
$trace = array("trace" => 1, "exceptions" => 1);

// user credential ---------------------------------------------
$userCredential = new ComplexType\WebAuthenticationCredential();
$userCredential->setKey($key);
$userCredential->setPassword($password);

// web authentication -----------------------------------------------
$webAuthenticationDetail = new ComplexType\WebAuthenticationDetail();
$webAuthenticationDetail->setUserCredential($userCredential);

// client detail -------------------------------
$clientDetail = new ComplexType\ClientDetail();
$clientDetail->setAccountNumber($accountNumber);
$clientDetail->setMeterNumber($meterNumber);

//turn off SOAP wsdl caching -----------
ini_set("soap.wsdl_cache_enabled", "0");
