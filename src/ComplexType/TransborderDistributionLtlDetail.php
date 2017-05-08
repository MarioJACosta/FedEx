<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TransborderDistributionLtlDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TransborderDistributionLtlDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TransborderDistributionLtlDetail';

    /**
     * @param Payment $payment
     * @return TransborderDistributionLtlDetail
     */
    public function setPayment($payment) {
        return $this->Payment = $payment;
    }

    /**
     * @param string $ltlScacCode
     * @return TransborderDistributionLtlDetail
     */
    public function setLtlScacCode($ltlScacCode) {
        return $this->LtlScacCode = $ltlScacCode;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\TransborderDistributionLtlDetail
     */
    public function setTransborderDistributionLtlDetail(array $param) {

        $payment = new Payment();

        $transborderDistributionLtlDetail = new TransborderDistributionLtlDetail();
        $transborderDistributionLtlDetail->setPayment($payment->setPayment(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31])));
        $transborderDistributionLtlDetail->setLtlScacCode($param[32]);

        return $transborderDistributionLtlDetail;
    }

}
