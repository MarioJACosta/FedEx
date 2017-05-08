<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the heaviness of an object
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Weight extends AbstractComplexType {

    /**
     *
     * @var string
     */
    protected $_name = 'Weight';

    /**
     * 
     * @param integer $value
     * @return Weight
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * 
     * @param string $units
     * @return Weight
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Weight
     */
    public function setWeight(array $param) {
        $weight = new Weight();
        
        $weight->setValue($param[0]);
        $weight->setUnits($param[1]);

        return $weight;
    }

}
