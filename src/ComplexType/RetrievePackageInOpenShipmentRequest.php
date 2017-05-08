<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RetrievePackageInOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RetrievePackageInOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RetrievePackageInOpenShipmentRequest';

    /**
     * @param string $index
     * @return RetrievePackageInOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

    /**
     * @param TrackingId $trackingId
     * @return RetrievePackageInOpenShipmentRequest
     */
    public function setTrackingId($trackingId) {
        return $this->TrackingId = $trackingId;
    }

}
