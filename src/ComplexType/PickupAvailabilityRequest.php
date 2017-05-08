<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PickupAvailabilityRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupAvailabilityRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PickupAvailabilityRequest';

    /**
     * @param AssociatedAccount $accountNumber
     * @return PickupAvailabilityRequest
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }

    /**
     * @param Address $pickupAddress
     * @return PickupAvailabilityRequest
     */
    public function setPickupAddress($pickupAddress) {
        return $this->PickupAddress = $pickupAddress;
    }

    /**
     * @param string $pickupRequestType
     * @return PickupAvailabilityRequest
     */
    public function setPickupRequestType($pickupRequestType) {
        return $this->PickupRequestType = $pickupRequestType;
    }

    /**
     * @param Datetime $dispatchDate
     * @return PickupAvailabilityRequest
     */
    public function setDispatchDate($dispatchDate) {
        return $this->DispatchDate = $dispatchDate;
    }

    /**
     * @param integer $numberOfBusinessDays
     * @return PickupAvailabilityRequest
     */
    public function setNumberOfBusinessDays($numberOfBusinessDays) {
        return $this->NumberOfBusinessDays = $numberOfBusinessDays;
    }

    /**
     * @param Datetime $packageReadyTime
     * @return PickupAvailabilityRequest
     */
    public function setPackageReadyTime($packageReadyTime) {
        return $this->PackageReadyTime = $packageReadyTime;
    }

    /**
     * @param Datetime $customerCloseTime
     * @return PickupAvailabilityRequest
     */
    public function setCustomerCloseTime($customerCloseTime) {
        return $this->CustomerCloseTime = $customerCloseTime;
    }

    /**
     * @param string $carriers
     * @return PickupAvailabilityRequest
     */
    public function setCarriers($carriers) {
        return $this->Carriers = $carriers;
    }

    /**
     * @param PickupShipmentAttributes $shipmentAttributes
     * @return PickupAvailabilityRequest
     */
    public function setShipmentAttributes($shipmentAttributes) {
        return $this->ShipmentAttributes = $shipmentAttributes;
    }

}
