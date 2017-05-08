<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SortAndSegregateDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SortAndSegregateDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SortAndSegregateDetail';

    /**
     * @param integer $pieceCount
     * @return SortAndSegregateDetail
     */
    public function setPieceCount($pieceCount) {
        return $this->PieceCount = $pieceCount;
    }

    /**
     * @param Weight $weight
     * @return SortAndSegregateDetail
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\SortAndSegregateDetail
     */
    public function setSortAndSegregateDetail(array $param) {

        $weight = new Weight();

        $shipmentAssemblyDetail = new SortAndSegregateDetail();
        $shipmentAssemblyDetail->setPieceCount($param[0]);
        $shipmentAssemblyDetail->setWeight($weight->setWeight(array($param[1], $param[2])));

        return $shipmentAssemblyDetail;
    }

}
