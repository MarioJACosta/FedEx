<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentAssemblyDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentAssemblyDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentAssemblyDetail';

    /**
     * @param integer $pieceCount
     * @return ShipmentAssemblyDetail
     */
    public function setPieceCount($pieceCount) {
        return $this->PieceCount = $pieceCount;
    }

    /**
     * @param Weight $weight
     * @return ShipmentAssemblyDetail
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShipmentAssemblyDetail
     */
    public function setShipmentAssemblyDetail(array $param) {

        $weight = new Weight();

        $shipmentAssemblyDetail = new ShipmentAssemblyDetail();
        $shipmentAssemblyDetail->setPieceCount($param[0]);
        $shipmentAssemblyDetail->setWeight($weight->setWeight(array($param[1], $param[2])));

        return $shipmentAssemblyDetail;
    }

}
