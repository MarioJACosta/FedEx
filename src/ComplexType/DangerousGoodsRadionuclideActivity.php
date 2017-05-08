<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DangerousGoodsRadionuclideActivity
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DangerousGoodsRadionuclideActivity extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DangerousGoodsRadionuclideActivity';

    /**
     * @param integer $value
     * @return DangerousGoodsRadionuclideActivity
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * @param string $unitOfMeasure
     * @return DangerousGoodsRadionuclideActivity
     */
    public function setUnitOfMeasure($unitOfMeasure) {
        return $this->UnitOfMeasure = $unitOfMeasure;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DangerousGoodsRadionuclideActivity
     */
    public function setDangerousGoodsRadionuclideActivity(array $param) {

        $dangerousGoodsRadionuclideActivity = new DangerousGoodsRadionuclideActivity();
        $dangerousGoodsRadionuclideActivity->setValue($param[0]);
        $dangerousGoodsRadionuclideActivity->setUnitOfMeasure($param[1]);

        return $dangerousGoodsRadionuclideActivity;
    }

}
