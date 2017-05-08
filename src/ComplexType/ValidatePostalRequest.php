<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ValidatePostalRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ValidatePostalRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ValidatePostalRequest';

    /**
     * @param Datetime $shipDateTime
     * @return ValidatePostalRequest
     */
    public function setShipDateTime($shipDateTime) {
        return $this->ShipDateTime = $shipDateTime;
    }

    /**
     * @param Address $address
     * @return ValidatePostalRequest
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * @param string $routingCode
     * @return ValidatePostalRequest
     */
    public function setRoutingCode($routingCode) {
        return $this->RoutingCode = $routingCode;
    }

    /**
     * @param boolean $checkForMismatch
     * @return ValidatePostalRequest
     */
    public function setCheckForMismatch($checkForMismatch) {
        return $this->CheckForMismatch = $checkForMismatch;
    }

    /**
     * @param string $carrierCode
     * @return ValidatePostalRequest
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

}
