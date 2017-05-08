<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ServiceAvailabilityRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ServiceAvailabilityRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ServiceAvailabilityRequest';

    /**
     * @param Address $origin
     * @return ServiceAvailabilityRequest
     */
    public function setOrigin($origin) {
        return $this->Origin = $origin;
    }

    /**
     * @param Address $destination
     * @return ServiceAvailabilityRequest
     */
    public function setDestination($destination) {
        return $this->Destination = $destination;
    }

    /**
     * @param Datetime $shipDate
     * @return ServiceAvailabilityRequest
     */
    public function setShipDate($shipDate) {
        return $this->ShipDate = $shipDate;
    }

    /**
     * @param string $carrierCode
     * @return ServiceAvailabilityRequest
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

    /**
     * @param string $service
     * @return ServiceAvailabilityRequest
     */
    public function setService($service) {
        return $this->Service = $service;
    }

    /**
     * @param string $packaging
     * @return PackagingAvailabilityRequest
     */
    public function setPackaging($packaging) {
        return $this->Packaging = $packaging;
    }

}
