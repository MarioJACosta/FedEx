<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class describes the pickup characteristics of a shipment (e.g. for use in a tag request)
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'PickupDetail';

    /**
     * @param DateTime $readyDateTime
     * @return PickupDetail
     */
    public function setReadyDateTime($readyDateTime) {
        return $this->ReadyDateTime = $readyDateTime;
    }

    /**
     * @param DateTime $latestPickupDateTime
     * @return PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime) {
        return $this->LatestPickupDateTime = $latestPickupDateTime;
    }

    /**
     * @param string $courierInstructions
     * @return PickupDetail
     */
    public function setCourierInstructions($courierInstructions) {
        return $this->CourierInstructions = $courierInstructions;
    }

    /**
     * @param string $requestType
     * @return PickupDetail
     */
    public function setRequestType($requestType) {
        return $this->RequestType = $requestType;
    }

    /**
     * @param string $requestSource
     * @return PickupDetail
     */
    public function setRequestSource($requestSource) {
        return $this->RequestSource = $requestSource;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\PickupDetail
     */
    public function setPickupDetail(array $param) {

        $pickupDetail = new PickupDetail();
        $pickupDetail->setReadyDateTime($param[0]);
        $pickupDetail->setLatestPickupDateTime($param[1]);
        $pickupDetail->setCourierInstructions($param[2]);
        $pickupDetail->setRequestType($param[3]);
        $pickupDetail->setRequestSource($param[4]);

        return $pickupDetail;
    }

}
