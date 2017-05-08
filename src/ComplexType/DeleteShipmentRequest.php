<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeleteShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeleteShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeleteShipmentRequest';

    /**
     * @param Datetime $shipTimestamp
     * @return DeleteShipmentRequest
     */
    public function setShipTimestamp($shipTimestamp) {
        return $this->ShipTimestamp = $shipTimestamp;
    }

    /**
     * @param TrackingId $trackingId
     * @return DeleteShipmentRequest
     */
    public function setTrackingId($trackingId) {
        return $this->TrackingId = $trackingId;
    }

    /**
     * @param string $deletionControl
     * @return DeleteShipmentRequest
     */
    public function setDeletionControl($deletionControl) {
        return $this->DeletionControl = $deletionControl;
    }
}
