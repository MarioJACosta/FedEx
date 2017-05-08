<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ExpressTagAvailabilityRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExpressTagAvailabilityRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ExpressTagAvailabilityRequest';

    /**
     * @param Datetime $readyDateTime
     * @return ExpressTagAvailabilityRequest
     */
    public function setReadyDateTime($readyDateTime) {
        return $this->ReadyDateTime = $readyDateTime;
    }

    /**
     * @param Address $originAddress
     * @return ExpressTagAvailabilityRequest
     */
    public function setOriginAddress($originAddress) {
        return $this->OriginAddress = $originAddress;
    }

    /**
     * @param string $service
     * @return ExpressTagAvailabilityRequest
     */
    public function setService($service) {
        return $this->Service = $service;
    }

    /**
     * @param string $packaging
     * @return ExpressTagAvailabilityRequest
     */
    public function setPackaging($packaging) {
        return $this->Packaging = $packaging;
    }

}
