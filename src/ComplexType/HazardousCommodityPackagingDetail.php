<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HazardousCommodityPackagingDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HazardousCommodityPackagingDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HazardousCommodityPackagingDetail';

    /**
     * @param integer $count
     * @return HazardousCommodityPackagingDetail
     */
    public function setCount($count) {
        return $this->Count = $count;
    }

    /**
     * @param string $units
     * @return HazardousCommodityPackagingDetail
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\HazardousCommodityPackagingDetail
     */
    public function setHazardousCommodityPackagingDetail(array $param) {

        $hazardousCommodityPackagingDetail = new HazardousCommodityPackagingDetail();
        $hazardousCommodityPackagingDetail->setCount($param[0]);
        $hazardousCommodityPackagingDetail->setUnits($param[1]);

        return $hazardousCommodityPackagingDetail;
    }

}
