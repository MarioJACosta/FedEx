<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies which party will be responsible for payment of any surcharges for Freight special services for which split billing is allowed.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightSpecialServicePayment extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'FreightSpecialServicePayment';

    /**
     * @param string $specialService
     * @return FreightSpecialServicePayment
     */
    public function setSpecialService($specialService) {
        return $this->SpecialService = $specialService;
    }

    /**
     * @param string $paymentType
     * @return FreightSpecialServicePayment
     */
    public function setPaymentType($paymentType) {
        return $this->PaymentType = $paymentType;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\FreightSpecialServicePayment
     */
    public function setFreightSpecialServicePayment(array $param) {

        $freightSpecialServicePayment = new FreightSpecialServicePayment();
        $freightSpecialServicePayment->setSpecialService($param[0]);
        $freightSpecialServicePayment->setPaymentType($param[1]);

        return $freightSpecialServicePayment;
    }

}
