<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ListDangerousGoodsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ListDangerousGoodsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ListDangerousGoodsRequest';

    /**
     * @param Address $origin
     * @return ListDangerousGoodsRequest
     */
    public function setOrigin($origin) {
        return $this->Origin = $origin;
    }

    /**
     * @param Address $destination
     * @return ListDangerousGoodsRequest
     */
    public function setDestination($destination) {
        return $this->Destination = $destination;
    }

    /**
     * @param string $carrierCode
     * @return ListDangerousGoodsRequest
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

    /**
     * @param string $serviceType
     * @return ListDangerousGoodsRequest
     */
    public function setServiceType($serviceType) {
        return $this->ServiceType = $serviceType;
    }

    /**
     * @param Datetime $shipDate
     * @return ListDangerousGoodsRequest
     */
    public function setShipDate($shipDate) {
        return $this->ShipDate = $shipDate;
    }

    /**
     * @param string $trackingNumber
     * @return ListDangerousGoodsRequest
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

}
