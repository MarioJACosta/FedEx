<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeletePendingShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeletePendingShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeletePendingShipmentRequest';

    /**
     * @param TrackingId $trackingIds
     * @return DeletePendingShipmentRequest
     */
    public function setTrackingIds($trackingIds) {
        return $this->TrackingIds = $trackingIds;
    }

}
