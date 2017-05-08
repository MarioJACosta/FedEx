<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Dimensions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Dimensions extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Dimensions';

    /**
     * @param integer $length
     * @return Dimensions
     */
    public function setLength($length) {
        return $this->Length = $length;
    }

    /**
     * @param integer $width
     * @return Dimensions
     */
    public function setWidth($width) {
        return $this->Width = $width;
    }

    /**
     * @param integer $height
     * @return Dimensions
     */
    public function setHeight($height) {
        return $this->Height = $height;
    }

    /**
     * @param string $units
     * @return Dimensions
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /** 
     * @param array $param
     * @return \FedEx\ComplexType\Dimensions
     */
    public function setDimensions(array $param) {

        $dimensions = new Dimensions();
        $dimensions->setLength($param[0]);
        $dimensions->setWidth($param[1]);
        $dimensions->setHeight($param[2]);
        $dimensions->setUnits($param[3]);

        return $dimensions;
    }

}
