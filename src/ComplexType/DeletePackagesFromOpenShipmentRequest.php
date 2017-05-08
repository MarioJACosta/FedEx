<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeletePackagesFromOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeletePackagesFromOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeletePackagesFromOpenShipmentRequest';

    /**
     * @param string $index
     * @return DeletePackagesFromOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

    /**
     * @param TrackingId $trackingIds
     * @return DeletePackagesFromOpenShipmentRequest
     */
    public function setTrackingIds($trackingIds) {
        return $this->TrackingIds = $trackingIds;
    }

}
