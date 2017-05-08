<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TrackingId
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TrackingId extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'TrackingId';

    /**
     * @param string $trackingIdType
     * @return TrackingIdType
     */
    public function setTrackingIdType($trackingIdType) {
        return $this->TrackingIdType = $trackingIdType;
    }

    /**
     * @param string $formId
     * @return TrackingId
     */
    public function setFormId($formId) {
        return $this->FormId = $formId;
    }

    /**
     * @param string $uspsApplicationId
     * @return TrackingId
     */
    public function setUspsApplicationId($uspsApplicationId) {
        return $this->UspsApplicationId = $uspsApplicationId;
    }

    /**
     * @param string $trackingNumber
     * @return TrackingId
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\TrackingId
     */
    public function setTrackingId(array $param) {

        $trackingId = new TrackingId();
        $trackingId->setTrackingIdType($param[0]);
        $trackingId->setFormId($param[1]);
        $trackingId->setUspsApplicationId($param[2]);
        $trackingId->setTrackingNumber($param[3]);

        return $trackingId;
    }

}
