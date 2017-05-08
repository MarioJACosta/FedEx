<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DangerousGoodsRadionuclideDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DangerousGoodsRadionuclideDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DangerousGoodsRadionuclideDetail';

    /**
     * @param string $radionuclides
     * @return DangerousGoodsRadionuclideDetail
     */
    public function setRadionuclides($radionuclides) {
        return $this->Radionuclides = $radionuclides;
    }

    /**
     * @param DangerousGoodsRadionuclideActivity $activity
     * @return DangerousGoodsRadionuclideDetail
     */
    public function setActivity($activity) {
        return $this->Activity = $activity;
    }

    /**
     * @param string $physicalForm
     * @return DangerousGoodsRadionuclideDetail
     */
    public function setPhysicalForm($physicalForm) {
        return $this->PhysicalForm = $physicalForm;
    }

    /**
     * @param string $chemicalForm
     * @return DangerousGoodsRadionuclideDetail
     */
    public function setChemicalForm($chemicalForm) {
        return $this->ChemicalForm = $chemicalForm;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DangerousGoodsRadionuclideDetail
     */
    public function setDangerousGoodsRadionuclideDetail(array $param) {

        $activity = new DangerousGoodsRadionuclideActivity();

        $dangerousGoodsRadionuclideDetail = new DangerousGoodsRadionuclideDetail();
        $dangerousGoodsRadionuclideDetail->setRadionuclides($param[0]);
        $dangerousGoodsRadionuclideDetail->setActivity($activity->setDangerousGoodsRadionuclideActivity(array($param[1], $param[2])));
        $dangerousGoodsRadionuclideDetail->setPhysicalForm($param[3]);
        $dangerousGoodsRadionuclideDetail->setChemicalForm($param[4]);

        return $dangerousGoodsRadionuclideDetail;
    }

}
