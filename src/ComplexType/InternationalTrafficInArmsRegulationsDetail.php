<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of InternationalTrafficInArmsRegulationsDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class InternationalTrafficInArmsRegulationsDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'InternationalTrafficInArmsRegulationsDetail';
    
    /**
     * @param string $licenseOrExemptionNumber
     * @return InternationalTrafficInArmsRegulationsDetail
     */
    public function setLicenseOrExemptionNumber($licenseOrExemptionNumber) {
        return $this->LicenseOrExemptionNumber = $licenseOrExemptionNumber;
    }

}
