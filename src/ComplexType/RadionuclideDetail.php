<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RadionuclideDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RadionuclideDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RadionuclideDetail';

    /**
     * @param string $radionuclide
     * @return RadionuclideDetail
     */
    public function setRadionuclide($radionuclide) {
        return $this->Radionuclide = $radionuclide;
    }

    /**
     * @param RadionuclideActivity $activity
     * @return RadionuclideDetail
     */
    public function setActivity($activity) {
        return $this->Activity = $activity;
    }

    /**
     * @param boolean $exceptedPackagingIsReportableQuantity
     * @return RadionuclideDetail
     */
    public function setExceptedPackagingIsReportableQuantity($exceptedPackagingIsReportableQuantity) {
        return $this->ExceptedPackagingIsReportableQuantity = $exceptedPackagingIsReportableQuantity;
    }

    /**
     * @param string $physicalForm
     * @return RadionuclideDetail
     */
    public function setPhysicalForm($physicalForm) {
        return $this->PhysicalForm = $physicalForm;
    }

    /**
     * @param string $chemicalForm
     * @return RadionuclideDetail
     */
    public function setChemicalForm($chemicalForm) {
        return $this->ChemicalForm = $chemicalForm;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\RadionuclideDetail
     */
    public function setRadionuclideDetail(array $param) {

        $activity = new RadionuclideActivity();

        $radionuclideDetail = new RadionuclideDetail();
        $radionuclideDetail->setRadionuclide($param[0]);
        $radionuclideDetail->setActivity($activity->setRadionuclideActivity(array($param[1], $param[2])));
        $radionuclideDetail->setExceptedPackagingIsReportableQuantity($param[3]);
        $radionuclideDetail->setPhysicalForm($param[4]);
        $radionuclideDetail->setChemicalForm($param[5]);

        return $radionuclideDetail;
    }

}
