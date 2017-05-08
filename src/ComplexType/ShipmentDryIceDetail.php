<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentDryIceDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentDryIceDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentDryIceDetail';

    /**
     * @param integer $packageCount
     * @return ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount) {
        return $this->PackageCount = $packageCount;
    }

    /**
     * @param Weight $totalWeight
     * @return ShipmentDryIceDetail
     */
    public function setTotalWeight($totalWeight) {
        return $this->TotalWeight = $totalWeight;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShipmentDryIceDetail
     */
    public function setShipmentDryIceDetail(array $param) {

        $weight = new Weight();

        $shipmentDryIceDetail = new ShipmentDryIceDetail();
        $shipmentDryIceDetail->setPackageCount($param[0]);
        $shipmentDryIceDetail->setTotalWeight($weight->setWeight(array($param[1], $param[2])));

        return $shipmentDryIceDetail;
    }

}
