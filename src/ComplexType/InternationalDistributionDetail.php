<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of InternationalDistributionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class InternationalDistributionDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'InternationalDistributionDetail';

    /**
     * @param string $dropoffType
     * @return InternationalDistributionDetail
     */
    public function setDropoffType($dropoffType) {
        return $this->DropoffType = $dropoffType;
    }

    /**
     * @param Dimensions $totalDimensions
     * @return InternationalDistributionDetail
     */
    public function setTotalDimensions($totalDimensions) {
        return $this->TotalDimensions = $totalDimensions;
    }

    /**
     * @param Money $totalInsuredValue
     * @return InternationalDistributionDetail
     */
    public function setTotalInsuredValue($totalInsuredValue) {
        return $this->TotalInsuredValue = $totalInsuredValue;
    }

    /**
     * @param string $unitSystem
     * @return InternationalDistributionDetail
     */
    public function setUnitSystem($unitSystem) {
        return $this->UnitSystem = $unitSystem;
    }

    /**
     * @param DeclarationCurrency $declarationCurrencies
     * @return InternationalDistributionDetail
     */
    public function setDeclarationCurrencies($declarationCurrencies) {
        return $this->DeclarationCurrencies = $declarationCurrencies;
    }

    /**
     * @param string $clearanceFacilityLocationId
     * @return InternationalDistributionDetail
     */
    public function setClearanceFacilityLocationId($clearanceFacilityLocationId) {
        return $this->ClearanceFacilityLocationId = $clearanceFacilityLocationId;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\InternationalDistributionDetail
     */
    public function setInternationalDistributionDetail(array $param) {

        $dimensions = new Dimensions();
        $money = new Money();
        $declarationCurrencies = new DeclarationCurrency();

        $internationalDistributionDetail = new InternationalDistributionDetail();
        $internationalDistributionDetail->setDropoffType($param[0]);
        $internationalDistributionDetail->setTotalDimensions($dimensions->setDimensions(array($param[1], $param[2], $param[3], $param[4])));
        $internationalDistributionDetail->setTotalInsuredValue($money->setMoney(array($param[5], $param[6])));
        $internationalDistributionDetail->setUnitSystem($param[7]);
        $internationalDistributionDetail->setDeclarationCurrencies($declarationCurrencies->setDeclarationCurrency(array($param[8], $param[9])));
        $internationalDistributionDetail->setClearanceFacilityLocationId($param[10]);

        return $internationalDistributionDetail;
    }

}
