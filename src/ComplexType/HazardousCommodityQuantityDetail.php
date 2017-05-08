<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HazardousCommodityQuantityDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HazardousCommodityQuantityDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HazardousCommodityQuantityDetail';

    /**
     * @param integer $amount
     * @return HazardousCommodityQuantityDetail
     */
    public function setAmount($amount) {
        return $this->Amount = $amount;
    }

    /**
     * @param string $units
     * @return HazardousCommodityQuantityDetail
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * @param string $quantityType
     * @return HazardousCommodityQuantityDetail
     */
    public function setQuantityType($quantityType) {
        return $this->QuantityType = $quantityType;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\HazardousCommodityQuantityDetail
     */
    public function setHazardousCommodityQuantityDetail(array $param) {
        $hazardousCommodityQuantityDetail = new HazardousCommodityQuantityDetail();
        $hazardousCommodityQuantityDetail->setAmount($param[0]);
        $hazardousCommodityQuantityDetail->setUnits($param[1]);
        $hazardousCommodityQuantityDetail->setQuantityType($param[2]);

        return $hazardousCommodityQuantityDetail;
    }

}
