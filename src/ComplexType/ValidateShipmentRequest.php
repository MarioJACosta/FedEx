<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data sent to FedEx by a customer in order to ship a package.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ValidateShipmentRequest extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ValidateShipmentRequest';

    /**
     * @param RequestedShipment $requestedShipment
     * @return ValidateShipmentRequest
     */
    public function setRequestedShipment($requestedShipment) {
        return $this->RequestedShipment = $requestedShipment;
    }

}
