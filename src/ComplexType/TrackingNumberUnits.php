<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TrackingNumberUnits
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TrackingNumberUnits extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TrackingNumberUnits';

    /**
     * @param TrackingId $trackingIds
     * @return TrackingNumberUnits
     */
    public function setTrackingIds($trackingIds) {
        return $this->TrackingIds = $trackingIds;
    }

}
