<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Distance
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Distance extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Distance';

    /**
     * @param integer $value
     * @return Distance
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * @param string $value
     * @return Distance
     */
    public function setUnits($value) {
        return $this->Units = $value;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Distance
     */
    public function setDistance(array $param) {

        $distance = new Distance();
        $distance->setValue($param[0]);
        $distance->setUnits($param[1]);

        return $distance;
    }

}
