<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ModifyPackageInOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ModifyPackageInOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ModifyPackageInOpenShipmentRequest';

    /**
     * @param string $actions
     * @return ModifyPackageInOpenShipmentRequest
     */
    public function setActions($actions) {
        return $this->Actions = $actions;
    }

    /**
     * @param TrackingId $trackingId
     * @return ModifyPackageInOpenShipmentRequest
     */
    public function setTrackingId($trackingId) {
        return $this->TrackingId = $trackingId;
    }

    /**
     * @param RequestedPackageLineItem $requestedPackageLineItem
     * @return ModifyPackageInOpenShipmentRequest
     */
    public function setRequestedPackageLineItem($requestedPackageLineItem) {
        return $this->RequestedPackageLineItem = $requestedPackageLineItem;
    }

}
