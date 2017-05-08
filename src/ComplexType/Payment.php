<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Payment
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Payment extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Payment';

    /**
     * @param string $paymentType
     * @return Payment
     */
    public function setPaymentType($paymentType) {
        return $this->PaymentType = $paymentType;
    }

    /**
     * @param Payor $payor
     * @return Payment
     */
    public function setPayor($payor) {
        return $this->Payor = $payor;
    }

    /**
     * @param Money $amount
     * @return Payment
     */
    public function setAmount($amount) {
        return $this->Amount = $amount;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Payment
     */
    public function setPayment(array $param) {

        $payment = new Payment();
        $payor = new Payor();
        $money = new Money();

        $payment->setPaymentType($param[0]);
        $payment->setPayor($payor->setPayor(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29])));
        $payment->setAmount($money->setMoney(array($param[30], $param[31])));

        return $payment;
    }

}
