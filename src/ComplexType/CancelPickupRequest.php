<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CancelPickupRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CancelPickupRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CancelPickupRequest';

    /**
     * @param string $carrierCode
     * @return CancelPickupRequest
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

    /**
     * @param string $pickupConfirmationNumber
     * @return CancelPickupRequest
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber) {
        return $this->PickupConfirmationNumber = $pickupConfirmationNumber;
    }

    /**
     * @param Datetime $scheduledDate
     * @return CancelPickupRequest
     */
    public function setScheduledDate($scheduledDate) {
        return $this->ScheduledDate = $scheduledDate;
    }

    /**
     * @param Datetime $endDate
     * @return CancelPickupRequest
     */
    public function setEndDate($endDate) {
        return $this->EndDate = $endDate;
    }

    /**
     * @param string $location
     * @return CancelPickupRequest
     */
    public function setLocation($location) {
        return $this->Location = $location;
    }

    /**
     * @param string $remarks
     * @return CancelPickupRequest
     */
    public function setRemarks($remarks) {
        return $this->Remarks = $remarks;
    }

    /**
     * @param Payment $shippingChargesPayment
     * @return CancelPickupRequest
     */
    public function setShippingChargesPayment($shippingChargesPayment) {
        return $this->ShippingChargesPayment = $shippingChargesPayment;
    }

    /**
     * @param string $reason
     * @return CancelPickupRequest
     */
    public function setReason($reason) {
        return $this->Reason = $reason;
    }

    /**
     * @param string $contactName
     * @return CancelPickupRequest
     */
    public function setContactName($contactName) {
        return $this->ContactName = $contactName;
    }

    /**
     * @param string $phoneNumber
     * @return CancelPickupRequest
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }

    /**
     * @param string $phoneExtension
     * @return CancelPickupRequest
     */
    public function setPhoneExtension($phoneExtension) {
        return $this->PhoneExtension = $phoneExtension;
    }

}
