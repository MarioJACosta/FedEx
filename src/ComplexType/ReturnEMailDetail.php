<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ReturnEMailDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReturnEMailDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ReturnEMailDetail';

    /**
     * @param string $merchantPhoneNumber
     * @return ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber) {
        return $this->MerchantPhoneNumber = $merchantPhoneNumber;
    }

    /**
     * @param string $allowedSpecialServices
     * @return ReturnEMailDetail
     */
    public function setAllowedSpecialServices($allowedSpecialServices) {
        return $this->AllowedSpecialServices = $allowedSpecialServices;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ReturnEMailDetail
     */
    public function setReturnEMailDetail(array $param) {
        $returnEMailDetail = new ReturnEMailDetail();
        $returnEMailDetail->setMerchantPhoneNumber($param[0]);
        $returnEMailDetail->setAllowedSpecialServices($param[1]);

        return $returnEMailDetail;
    }

}
