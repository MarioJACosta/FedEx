<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AssociatedTrackingId
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AssociatedTrackingId extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AssociatedTrackingId';
    
    /**
     * @param string $type
     * @return AssociatedTrackingId
     */
    public function setType($type) {
        return $this->Type = $type;
    }
    
    /**
     * @param string $trackingId
     * @return AssociatedTrackingId
     */
    public function setTrackingId($trackingId) {
        return $this->TrackingId = $trackingId;
    }

}
