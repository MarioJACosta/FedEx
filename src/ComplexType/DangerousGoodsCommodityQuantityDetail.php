<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DangerousGoodsCommodityQuantityDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DangerousGoodsCommodityQuantityDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DangerousGoodsCommodityQuantityDetail';

    /**
     * @param integer $amount
     * @return DangerousGoodsCommodityQuantityDetail
     */
    public function setAmount($amount) {
        return $this->Amount = $amount;
    }

    /**
     * @param string $units
     * @return DangerousGoodsCommodityQuantityDetail
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * @param string $quantityType
     * @return DangerousGoodsCommodityQuantityDetail
     */
    public function setQuantityType($quantityType) {
        return $this->QuantityType = $quantityType;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DangerousGoodsCommodityQuantityDetail
     */
    public function setDangerousGoodsCommodityQuantityDetail(array $param) {

        $dangerousGoodsCommodityQuantityDetail = new DangerousGoodsCommodityQuantityDetail();
        $dangerousGoodsCommodityQuantityDetail->setAmount($param[0]);
        $dangerousGoodsCommodityQuantityDetail->setUnits($param[1]);
        $dangerousGoodsCommodityQuantityDetail->setQuantityType($param[2]);

        return $dangerousGoodsCommodityQuantityDetail;
    }

}
