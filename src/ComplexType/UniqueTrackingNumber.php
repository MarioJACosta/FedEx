<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UniqueTrackingNumber
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UniqueTrackingNumber extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UniqueTrackingNumber';

    /**
     * @param string $trackingNumber
     * @return UniqueTrackingNumber
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

    /**
     * @param string $trackingNumberUniqueIdentifier
     * @return UniqueTrackingNumber
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier) {
        return $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
    }

    /**
     * @param Datetime $shipDate
     * @return UniqueTrackingNumber
     */
    public function setShipDate($shipDate) {
        return $this->ShipDate = $shipDate;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UniqueTrackingNumber
     */
    public function setUniqueTrackingNumber(array $param) {

        $uniqueTrackingNumber = new UniqueTrackingNumber();
        $uniqueTrackingNumber->setTrackingNumber($param[0]);
        $uniqueTrackingNumber->setTrackingNumberUniqueIdentifier($param[1]);
        $uniqueTrackingNumber->setShipDate($param[2]);

        return $uniqueTrackingNumber;
    }

}
