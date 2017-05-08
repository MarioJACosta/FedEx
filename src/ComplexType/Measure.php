<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Measure
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Measure extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Measure';

    /**
     * @param integer $quantity
     * @return Measure
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }

    /**
     * @param string $units
     * @return Measure
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Measure
     */
    public function setMeasure(array $param) {

        $measure = new Measure();
        $measure->setQuantity($param[0]);
        $measure->setUnits($param[1]);

        return $measure;
    }

}
