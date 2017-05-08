<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of InternationalDistributionSummaryDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class InternationalDistributionSummaryDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'InternationalDistributionSummaryDetail';

    /**
     * @param Weight $totalWeight
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalWeight($totalWeight) {
        return $this->TotalWeight = $totalWeight;
    }

    /**
     * @param integer $totalPackageCount
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalPackageCount($totalPackageCount) {
        return $this->TotalPackageCount = $totalPackageCount;
    }

    /**
     * @param integer $totalUniqueAddressCount
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalUniqueAddressCount($totalUniqueAddressCount) {
        return $this->TotalUniqueAddressCount = $totalUniqueAddressCount;
    }

    /**
     * @param Money $totalCustomsValue
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalCustomsValue($totalCustomsValue) {
        return $this->TotalCustomsValue = $totalCustomsValue;
    }

    /**
     * @param Money $totalInsuredValue
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalInsuredValue($totalInsuredValue) {
        return $this->TotalInsuredValue = $totalInsuredValue;
    }

    /**
     * @param Money $totalFreightCharges
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalFreightCharges($totalFreightCharges) {
        return $this->TotalFreightCharges = $totalFreightCharges;
    }

    /**
     * @param Money $totalInsuranceCharges
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalInsuranceCharges($totalInsuranceCharges) {
        return $this->TotalInsuranceCharges = $totalInsuranceCharges;
    }

    /**
     * @param Money $totalTaxesOrMiscellaneousCharges
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalTaxesOrMiscellaneousCharges($totalTaxesOrMiscellaneousCharges) {
        return $this->TotalTaxesOrMiscellaneousCharges = $totalTaxesOrMiscellaneousCharges;
    }

    /**
     * @param Money $totalHandlingCosts
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalHandlingCosts($totalHandlingCosts) {
        return $this->TotalHandlingCosts = $totalHandlingCosts;
    }

    /**
     * @param Money $totalPackingCosts
     * @return InternationalDistributionSummaryDetail
     */
    public function setTotalPackingCosts($totalPackingCosts) {
        return $this->TotalPackingCosts = $totalPackingCosts;
    }

    /**
     * @param ShipmentDryIceDetail $dryIceDetail
     * @return InternationalDistributionSummaryDetail
     */
    public function setDryIceDetail($dryIceDetail) {
        return $this->DryIceDetail = $dryIceDetail;
    }

    /**
     * @param string $dangerousGoodsAccessibility
     * @return InternationalDistributionSummaryDetail
     */
    public function setDangerousGoodsAccessibility($dangerousGoodsAccessibility) {
        return $this->DangerousGoodsAccessibility = $dangerousGoodsAccessibility;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\InternationalDistributionSummaryDetail
     */
    public function setInternationalDistributionSummaryDetail(array $param) {

        $weight = new Weight();
        $money = new Money();
        $dryIceDetail = new ShipmentDryIceDetail();

        $internationalDistributionSummaryDetail = new InternationalDistributionSummaryDetail();
        $internationalDistributionSummaryDetail->setTotalWeight($weight->setWeight(array_slice($param, 0, 2)));
        $internationalDistributionSummaryDetail->setTotalPackageCount($param[2]);
        $internationalDistributionSummaryDetail->setTotalUniqueAddressCount($param[3]);
        $internationalDistributionSummaryDetail->setTotalCustomsValue($money->setMoney(array_slice($param, 4, 2)));
        $internationalDistributionSummaryDetail->setTotalInsuredValue($money->setMoney(array_slice($param, 6, 2)));
        $internationalDistributionSummaryDetail->setTotalFreightCharges($money->setMoney(array_slice($param, 8, 2)));
        $internationalDistributionSummaryDetail->setTotalInsuranceCharges($money->setMoney(array_slice($param, 10, 2)));
        $internationalDistributionSummaryDetail->setTotalTaxesOrMiscellaneousCharges($money->setMoney(array_slice($param, 12, 2)));
        $internationalDistributionSummaryDetail->setTotalHandlingCosts($money->setMoney(array_slice($param, 14, 2)));
        $internationalDistributionSummaryDetail->setTotalPackingCosts($money->setMoney(array_slice($param, 16, 2)));
        $internationalDistributionSummaryDetail->setDryIceDetail($dryIceDetail->setShipmentDryIceDetail(array_slice($param, 18, 3)));
        $internationalDistributionSummaryDetail->setDangerousGoodsAccessibility($param[21]);

        return $internationalDistributionSummaryDetail;
    }

}
