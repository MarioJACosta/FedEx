<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SplitPaymentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SplitPaymentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SplitPaymentDetail';

    /**
     * @param string $type
     * @return SplitPaymentDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param Payment $payment
     * @return SplitPaymentDetail
     */
    public function setPayment($payment) {
        return $this->Payment = $payment;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\SplitPaymentDetail
     */
    public function setSplitPaymentDetail(array $param) {

        $payment = new Payment();

        $splitPaymentDetail = new SplitPaymentDetail();
        $splitPaymentDetail->setType($param[0]);
        $splitPaymentDetail->setPayment($payment->setPayment(array_slice($param, 1)));

        return $splitPaymentDetail;
    }

}
