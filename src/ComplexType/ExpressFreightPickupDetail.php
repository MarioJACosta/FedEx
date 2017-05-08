<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ExpressFreightPickupDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExpressFreightPickupDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ExpressFreightPickupDetail';

    /**
     * @param string $service
     * @return ExpressFreightPickupDetail
     */
    public function setService($service) {
        return $this->Service = $service;
    }

    /**
     * @param string $bookingNumber
     * @return ExpressFreightPickupDetail
     */
    public function setBookingNumber($bookingNumber) {
        return $this->BookingNumber = $bookingNumber;
    }

    /**
     * @param Dimensions $dimensions
     * @return ExpressFreightPickupDetail
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }

    /**
     * @param string $truckType
     * @return ExpressFreightPickupDetail
     */
    public function setTruckType($truckType) {
        return $this->TruckType = $truckType;
    }

    /**
     * @param string $trailerSize
     * @return ExpressFreightPickupDetail
     */
    public function setTrailerSize($trailerSize) {
        return $this->TrailerSize = $trailerSize;
    }

}
