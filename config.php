<?php

// WSDL PATH
define('addressWSDL', 'wsdl/AddressValidationService_v4.wsdl');
define('openShipWSDL', 'wsdl/OpenShipService_v11.wsdl');
define('rateWSDL', 'wsdl/RateService_v18.wsdl');
define('shipWSDL', 'wsdl/ShipService_v17.wsdl');
define('closeWSDL', 'wsdl/CloseService_v5.wsdl');
define('countryWSDL', 'wsdl/CountryService_v5.wsdl');
define('pickupWSDL', 'wsdl/PickupService_v13.wsdl');
define('dgldWSDL', 'wsdl/DGLD_v1.wsdl');
define('dgdsWSDL', 'wsdl/DGDS_v2.wsdl');
define('validateAvailabilityWSDL', 'wsdl/ValidationAvailabilityAndCommitmentService_v6.wsdl');
define('uploadDocumentsWSDL', 'wsdl/UploadDocumentService_v8.wsdl');
define('trackServiceWSDL', 'wsdl/TrackService_v12.wsdl');
define('asyncWSDL', 'wsdl/ASYNCService_v4.wsdl');
define('locationWSDL', 'wsdl/LocationsService_v5.wsdl');

// FEDEX LOCATION
define('location', 'https://wsbeta.fedex.com:443/web-services');

// AUTENTICATION 
define('key', 'VcEvZjvzPz1BAC5O');
define('password', 'orcyFJVpN1kBDJB49HMbSH0in');
define('accountNumber', '510087364');
define('meterNumber', '100298799');

// CUSTOMER IDs
define('customerTransactionId', ' *** Address Validation Request using PHP ***');
define('customerTransactionIdRate', '*** Rate Request using PHP ***');
define('customerTransactionIdShip', '*** Express Domestic Shipping Request using PHP ***');
define('customerTransactionIdClose', '*** Ground Close Request using PHP ***');
define('customerTransactionIdCountry', '*** Country Request using PHP ***');

// VERSION
define('serviceId', 'aval');
define('serviceIdClose', 'clos');
define('serviceIdRate', 'crs');
define('serviceIdShip', 'ship');
define('serviceIdCountry', 'cnty');
define('serviceIdPickup', 'disp');
define('serviceIdDGLD', 'dgds');
define('serviceIdValidateAvailability', 'vacs');
define('serviceIdUploadDocument', 'cdus');
define('serviceIdTrackService', 'trck');
define('serviceIdAsync', 'async');
define('serviceIdLocation', 'async');

// MAJOR
define('major', '4');
define('majorClose', '5');
define('majorRate', '18');
define('majorShip', '17');
define('majorOpenShip', '11');
define('majorPickup', '13');
define('majorCountry', '5');
define('majorDGLD', '1');
define('majorDGDS', '2');
define('majorvalidateAvailability', '6');
define('majorvUploadDocument', '8');
define('majorTrackService', '12');
define('majorAsync', '4');
define('majorLocation', '4');

// INTERMEDIATE
define('intermediate', '0');

// MINOR
define('minor', '0');
define('minorCountry', '1');

// fake values
define('addressValues', '');
define('groundCloseValues', '');
define('groundCloseWithDocValues', '');
define('groundCloseReportsReprintValues', '');
define('smartPostCloseValues', '');
define('deleteOpenConsolidationValues', '');
define('confirmConsolidationValues', '');
define('validatePostalValues', '');
define('rateValues', '');
define('pickupAvailabilityValues', '');
define('createPickupValues', '');
define('createFreightPickupValues', '');
define('cancelPickupValues', '');
define('validateShipmentValues', '');
define('dgldValues', '');
define('validateAvailabilityValues', '');
define('parameters', '');
define('shipping', '');
define('parametersRate', '');

