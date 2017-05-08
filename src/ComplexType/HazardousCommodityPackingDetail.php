<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HazardousCommodityPackingDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HazardousCommodityPackingDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HazardousCommodityPackingDetail';

    /**
     * @param boolean $cargoAircraftOnly
     * @return HazardousCommodityPackingDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly) {
        return $this->CargoAircraftOnly = $cargoAircraftOnly;
    }

    /**
     * @param string $packingInstructions
     * @return HazardousCommodityPackingDetail
     */
    public function setPackingInstructions($packingInstructions) {
        return $this->PackingInstructions = $packingInstructions;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\HazardousCommodityPackingDetail
     */
    public function setHazardousCommodityPackingDetail(array $param) {

        $hazardousCommodityPackingDetail = new HazardousCommodityPackingDetail();
        $hazardousCommodityPackingDetail->setCargoAircraftOnly($param[0]);
        $hazardousCommodityPackingDetail->setPackingInstructions($param[1]);

        return $hazardousCommodityPackingDetail;
    }

}
