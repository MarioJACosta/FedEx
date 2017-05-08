<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TransborderDistributionSpecialServicesRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TransborderDistributionSpecialServicesRequested extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TransborderDistributionSpecialServicesRequested';

    /**
     * @param string $specialServiceTypes
     * @return TransborderDistributionSpecialServicesRequested
     */
    public function setSpecialServiceTypes($specialServiceTypes) {
        return $this->SpecialServiceTypes = $specialServiceTypes;
    }

    /**
     * @param TransborderDistributionLtlDetail $transborderDistributionLtlDetail
     * @return TransborderDistributionSpecialServicesRequested
     */
    public function setTransborderDistributionLtlDetail($transborderDistributionLtlDetail) {
        return $this->TransborderDistributionLtlDetail = $transborderDistributionLtlDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\TransborderDistributionLtlDetail
     */
    public function setTransborderDistributionSpecialServicesRequested(array $param) {

        $transborderDistributionLtlDetail = new TransborderDistributionLtlDetail();

        $transborderDistributionSpecialServicesRequested = new TransborderDistributionSpecialServicesRequested();
        $transborderDistributionSpecialServicesRequested->setSpecialServiceTypes($param[0]);
        $transborderDistributionSpecialServicesRequested->setTransborderDistributionLtlDetail($transborderDistributionLtlDetail->setTransborderDistributionLtlDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33])));
        
        return $transborderDistributionLtlDetail;
    }

}
