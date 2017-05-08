<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentInternationalDistributionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentInternationalDistributionDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentInternationalDistributionDetail';

    /**
     * @param string $clearanceFacilityLocId
     * @return ShipmentInternationalDistributionDetail
     */
    public function setClearanceFacilityLocId($clearanceFacilityLocId) {
        return $this->ClearanceFacilityLocId = $clearanceFacilityLocId;
    }

    /**
     * @param string $clearanceType
     * @return ShipmentInternationalDistributionDetail
     */
    public function setClearanceType($clearanceType) {
        return $this->ClearanceType = $clearanceType;
    }

    /**
     * @param InternationalDistributionSummaryDetail $summaryDetail
     * @return ShipmentInternationalDistributionDetail
     */
    public function setSummaryDetail($summaryDetail) {
        return $this->SummaryDetail = $summaryDetail;
    }

    /**
     * @param SplitPaymentSpecification $splitPaymentSpecification
     * @return ShipmentInternationalDistributionDetail
     */
    public function setSplitPaymentSpecification($splitPaymentSpecification) {
        return $this->SplitPaymentSpecification = $splitPaymentSpecification;
    }
    
    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShipmentInternationalDistributionDetail
     */
    public function setShipmentInternationalDistributionDetail(array $param) {
        
        $summaryDetail = new InternationalDistributionSummaryDetail();
        $splitPaymentSpecification = new SplitPaymentSpecification();
        $payments = new SplitPaymentDetail();
        
        $shipmentInternationalDistributionDetail = new ShipmentInternationalDistributionDetail();
        $shipmentInternationalDistributionDetail->setClearanceFacilityLocId($param[0]);
        $shipmentInternationalDistributionDetail->setClearanceType($param[1]);
        $shipmentInternationalDistributionDetail->setSummaryDetail($summaryDetail->setInternationalDistributionSummaryDetail(array_slice($param, 2, 22)));
        $shipmentInternationalDistributionDetail->setSplitPaymentSpecification($splitPaymentSpecification->setPayments($payments->setSplitPaymentDetail(array_slice($param, 24, 32))));
        
        return $shipmentInternationalDistributionDetail;
    }

}
