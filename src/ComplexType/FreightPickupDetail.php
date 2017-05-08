<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of FreightPickupDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightPickupDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FreightPickupDetail';

    /**
     * @param Contact $approvedBy
     * @return FreightPickupDetail
     */
    public function setApprovedBy($approvedBy) {
        return $this->ApprovedBy = $approvedBy;
    }

    /**
     * @param string $payment
     * @return FreightPickupDetail
     */
    public function setPayment($payment) {
        return $this->Payment = $payment;
    }

    /**
     * @param string $role
     * @return FreightPickupDetail
     */
    public function setRole($role) {
        return $this->Role = $role;
    }

    /**
     * @param string $alternateBilling
     * @return FreightPickupDetail
     */
    public function setAlternateBilling($alternateBilling) {
        return $this->AlternateBilling = $alternateBilling;
    }

    /**
     * @param Contact $submittedBy
     * @return FreightPickupDetail
     */
    public function setSubmittedBy($submittedBy) {
        return $this->SubmittedBy = $submittedBy;
    }

    /**
     * @param FreightPickupLineItem $lineItems
     * @return FreightPickupDetail
     */
    public function setLineItems($lineItems) {
        return $this->LineItems = $lineItems;
    }

}
