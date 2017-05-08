<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RadionuclideActivity
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RadionuclideActivity extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RadionuclideActivity';

    /**
     * @param integer $value
     * @return RadionuclideActivity
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * @param string $unitOfMeasure
     * @return RadionuclideActivity
     */
    public function setUnitOfMeasure($unitOfMeasure) {
        return $this->UnitOfMeasure = $unitOfMeasure;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\RadionuclideActivity
     */
    public function setRadionuclideActivity(array $param) {

        $radionuclideActivity = new RadionuclideActivity();
        $radionuclideActivity->setValue($param[0]);
        $radionuclideActivity->setUnitOfMeasure($param[1]);

        return $radionuclideActivity;
    }

}
