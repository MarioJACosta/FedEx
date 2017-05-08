<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SplitPaymentSpecification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SplitPaymentSpecification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SplitPaymentSpecification';

    /**
     * @param SplitPaymentDetail $payments
     * @return SplitPaymentSpecification
     */
    public function setPayments($payments) {
        return $this->Payments = $payments;
    }
}
