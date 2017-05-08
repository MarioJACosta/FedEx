<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Volume
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Volume extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Volume';

    /**
     * @param integer $value
     * @return Volume
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * @param string $units
     * @return Volume
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Volume
     */
    public function setVolume(array $param) {

        $volume = new Volume();
        $volume->setValue($param[0]);
        $volume->setUnits($param[1]);

        return $volume;
    }

}
