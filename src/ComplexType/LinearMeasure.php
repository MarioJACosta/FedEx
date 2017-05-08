<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Represents a one-dimensional measurement in small units
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LinearMeasure extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'LinearMeasure';

    /**
     * @param integer $value
     * @return LinearMeasure
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * @param string $units
     * @return LinearMeasure
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\LinearMeasure
     */
    public function setLinearMeasure(array $param) {

        $linearMeasure = new LinearMeasure();
        $linearMeasure->setValue($param[0]);
        $linearMeasure->setUnits($param[1]);

        return $linearMeasure;
    }

}
