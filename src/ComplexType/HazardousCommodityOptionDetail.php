<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HazardousCommodityOptionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HazardousCommodityOptionDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HazardousCommodityOptionDetail';

    /**
     * @param integer $amount
     * @return HazardousCommodityOptionDetail
     */
    public function setAmount($amount) {
        return $this->Amount = $amount;
    }

    /**
     * @param string $units
     * @return HazardousCommodityOptionDetail
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * @param string $quantityType
     * @return HazardousCommodityOptionDetail
     */
    public function setQuantityType($quantityType) {
        return $this->QuantityType = $quantityType;
    }

    /**
     * @param string $labelTextOption
     * @return HazardousCommodityOptionDetail
     */
    public function setLabelTextOption($labelTextOption) {
        return $this->LabelTextOption = $labelTextOption;
    }

    /**
     * @param string $customerSuppliedLabelText
     * @return HazardousCommodityOptionDetail
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText) {
        return $this->CustomerSuppliedLabelText = $customerSuppliedLabelText;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\HazardousCommodityOptionDetail
     */
    public function setHazardousCommodityOptionDetail(array $param) {

        $hazardousCommodityOptionDetail = new HazardousCommodityOptionDetail();
        $hazardousCommodityOptionDetail->setLabelTextOption($param[0]);
        $hazardousCommodityOptionDetail->setCustomerSuppliedLabelText($param[1]);
        $hazardousCommodityOptionDetail->setAmount($param[2]);
        $hazardousCommodityOptionDetail->setUnits($param[3]);
        $hazardousCommodityOptionDetail->setQuantityType($param[4]);

        return $hazardousCommodityOptionDetail;
    }

}
