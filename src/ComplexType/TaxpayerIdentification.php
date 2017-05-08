<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TaxpayerIdentification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TaxpayerIdentification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TaxpayerIdentification';

//    /**
//     * @param string $taxpayerIdentification
//     * @return TaxpayerIdentification
//     */
//    public function setTaxpayerIdentification($taxpayerIdentification) {
//        return $this->TaxpayerIdentification = $taxpayerIdentification;
//    }

    /**
     * @param string $number
     * @return TaxpayerIdentification
     */
    public function setNumber($number) {
        return $this->Number = $number;
    }

    /**
     * @param string $usage
     * @return TaxpayerIdentification
     */
    public function setUsage($usage) {
        return $this->Usage = $usage;
    }

    /**
     * @param Datetime $effectiveDate
     * @return TaxpayerIdentification
     */
    public function setEffectiveDate($effectiveDate) {
        return $this->EffectiveDate = $effectiveDate;
    }

    /**
     * @param Datetime $expirationDate
     * @return TaxpayerIdentification
     */
    public function setExpirationDate($expirationDate) {
        return $this->ExpirationDate = $expirationDate;
    }

    /**
     * @param string $tinType
     * @return TaxpayerIdentification
     */
    public function setTinType($tinType) {
        return $this->TinType = $tinType;
    }

    public function setTaxpayerIdentification($param) {

        $taxpayerIdentification = new TaxpayerIdentification();
        $taxpayerIdentification->setTinType($param[0]);
        $taxpayerIdentification->setNumber($param[1]);
        $taxpayerIdentification->setUsage($param[2]);
        $taxpayerIdentification->setEffectiveDate($param[3]);
        $taxpayerIdentification->setExpirationDate($param[4]);

        return $taxpayerIdentification;
    }

}
