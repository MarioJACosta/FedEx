<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightShipmentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FreightShipmentDetail';

    /**
     * @param string $fedExFreightAccountNumber
     * @return FreightShipmentDetail
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber) {
        return $this->FedExFreightAccountNumber = $fedExFreightAccountNumber;
    }

    /**
     * @param ContactAndAddress $fedExFreightBillingContactAndAddress
     * @return FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress($fedExFreightBillingContactAndAddress) {
        return $this->FedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
    }

    /**
     * @param Party $alternateBilling
     * @return FreightShipmentDetail
     */
    public function setAlternateBilling($alternateBilling) {
        return $this->AlternateBilling = $alternateBilling;
    }

    /**
     * @param string $role
     * @return FreightShipmentDetail
     */
    public function setRole($role) {
        return $this->Role = $role;
    }

    /**
     * @param string $collectTermsType
     * @return FreightShipmentDetail
     */
    public function setCollectTermsType($collectTermsType) {
        return $this->CollectTermsType = $collectTermsType;
    }

    /**
     * @param Money $declaredValuePerUnit
     * @return FreightShipmentDetail
     */
    public function setDeclaredValuePerUnit($declaredValuePerUnit) {
        return $this->DeclaredValuePerUnit = $declaredValuePerUnit;
    }

    /**
     * @param string $declaredValueUnits
     * @return FreightShipmentDetail
     */
    public function setDeclaredValueUnits($declaredValueUnits) {
        return $this->DeclaredValueUnits = $declaredValueUnits;
    }

    /**
     * @param LiabilityCoverageDetail $liabilityCoverageDetail
     * @return FreightShipmentDetail
     */
    public function setLiabilityCoverageDetail($liabilityCoverageDetail) {
        return $this->LiabilityCoverageDetail = $liabilityCoverageDetail;
    }

    /**
     * @param string $coupons
     * @return FreightShipmentDetail
     */
    public function setCoupons($coupons) {
        return $this->Coupons = $coupons;
    }

    /**
     * @param integer $totalHandlingUnits
     * @return FreightShipmentDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits) {
        return $this->TotalHandlingUnits = $totalHandlingUnits;
    }

    /**
     * @param integer $clientDiscountPercent
     * @return FreightShipmentDetail
     */
    public function setClientDiscountPercent($clientDiscountPercent) {
        return $this->ClientDiscountPercent = $clientDiscountPercent;
    }

    /**
     * @param Weight $palletWeight
     * @return FreightShipmentDetail
     */
    public function setPalletWeight($palletWeight) {
        return $this->PalletWeight = $palletWeight;
    }

    /**
     * @param Dimensions $shipmentDimensions
     * @return FreightShipmentDetail
     */
    public function setShipmentDimensions($shipmentDimensions) {
        return $this->ShipmentDimensions = $shipmentDimensions;
    }

    /**
     * @param string $comment
     * @return FreightShipmentDetail
     */
    public function setComment($comment) {
        return $this->Comment = $comment;
    }

    /**
     * @param FreightSpecialServicePayment $SpecialServicePayments
     * @return FreightShipmentDetail
     */
    public function setSpecialServicePayments($SpecialServicePayments) {
        return $this->SpecialServicePayments = $SpecialServicePayments;
    }
    
    /**
     * @param string $hazardousMaterialsOfferor
     * @return FreightShipmentDetail
     */
    public function setHazardousMaterialsOfferor($hazardousMaterialsOfferor) {
        return $this->HazardousMaterialsOfferor = $hazardousMaterialsOfferor;
    }
    
    /**
     * @param string $hazardousMaterialsEmergencyContactNumber
     * @return FreightShipmentDetail
     */
    public function setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber) {
        return $this->HazardousMaterialsEmergencyContactNumber = $hazardousMaterialsEmergencyContactNumber;
    }
    
    /**
     * @param FreightShipmentLineItem $lineItems
     * @return FreightShipmentDetail
     */
    public function setLineItems($lineItems) {
        return $this->LineItems = $lineItems;
    }
    
    /**
     * @param PrintedReference $printedReferences
     * @return FreightShipmentDetail
     */
    public function setPrintedReferences($printedReferences) {
        return $this->PrintedReferences = $printedReferences;
    }
    
    
    public function setFreightShipmentDetail(array $param) {
        
        $contactAndAddress = new ContactAndAddress();
        $party = new Party();
        $printedReferences = new PrintedReference();
        $money = new Money();
        $liabilityCoverageDetail = new LiabilityCoverageDetail();
        $weight = new Weight();
        $dimensions = new Dimensions();
        $SpecialServicePayments = new FreightSpecialServicePayment();
        $lineItems = new FreightShipmentLineItem();
        
        $freightShipmentDetail = new FreightShipmentDetail();
        $freightShipmentDetail->setFedExFreightAccountNumber($param[0]);
        $freightShipmentDetail->setFedExFreightBillingContactAndAddress($contactAndAddress->setContactAndAddress(array_slice($param, 1, 21)));
        $freightShipmentDetail->setAlternateBilling($party->setParty(array_slice($param, 22, 27)));
        $freightShipmentDetail->setPrintedReferences($printedReferences->setPrintedReference(array_slice($param, 49, 2)));
        $freightShipmentDetail->setRole($param[51]);
        $freightShipmentDetail->setCollectTermsType($param[52]);
        $freightShipmentDetail->setDeclaredValuePerUnit($money->setMoney(array_slice($param, 53, 2)));
        $freightShipmentDetail->setDeclaredValueUnits($param[55]);
        $freightShipmentDetail->setLiabilityCoverageDetail($liabilityCoverageDetail->setLiabilityCoverageDetail(array_slice($param, 56, 3)));
        $freightShipmentDetail->setCoupons($param[59]);
        $freightShipmentDetail->setTotalHandlingUnits($param[60]);
        $freightShipmentDetail->setClientDiscountPercent($param[61]);
        $freightShipmentDetail->setPalletWeight($weight->setWeight(array_slice($param, 62, 2)));
        $freightShipmentDetail->setShipmentDimensions($dimensions->setDimensions(array_slice($param, 64, 4)));
        $freightShipmentDetail->setComment($param[68]);
        $freightShipmentDetail->setSpecialServicePayments($SpecialServicePayments->setFreightSpecialServicePayment(array_slice($param, 69, 2)));
        $freightShipmentDetail->setHazardousMaterialsEmergencyContactNumber($param[71]);
        $freightShipmentDetail->setHazardousMaterialsOfferor($param[72]);
        $freightShipmentDetail->setLineItems($lineItems);
    }
}
