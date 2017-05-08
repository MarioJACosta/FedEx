<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RequestedPackageLineItem extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'RequestedPackageLineItem';

    /**
     * @param integer $sequenceNumber
     * @return RequestedPackageLineItem
     */
    public function setSequenceNumber($sequenceNumber) {
        return $this->SequenceNumber = $sequenceNumber;
    }

    /**
     * @param integer $groupNumber
     * @return RequestedPackageLineItem
     */
    public function setGroupNumber($groupNumber) {
        return $this->GroupNumber = $groupNumber;
    }

    /**
     * @param integer $groupPackageCount
     * @return RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount) {
        return $this->GroupPackageCount = $groupPackageCount;
    }

    /**
     * @param TrackingId $trackingIds
     * @return RequestedPackageLineItem
     */
    public function setTrackingIds($trackingIds) {
        return $this->TrackingIds = $trackingIds;
    }

    /**
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail($variableHandlingChargeDetail) {
        return $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
    }

    /**
     * @param Money $insuredValue
     * @return RequestedPackageLineItem
     */
    public function setInsuredValue($insuredValue) {
        return $this->InsuredValue = $insuredValue;
    }

    /**
     * @param Weight $weight
     * @return RequestedPackageLineItem
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }

    /**
     * @param Dimensions $dimensions
     * @return RequestedPackageLineItem
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }

    /**
     * @param string $physicalPackaging
     * @return RequestedPackageLineItem
     */
    public function setPhysicalPackaging($physicalPackaging) {
        return $this->PhysicalPackaging = $physicalPackaging;
    }

    /**
     * @param string $itemDescription
     * @return RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription) {
        return $this->ItemDescription = $itemDescription;
    }

    /**
     * @param string $itemDescriptionForClearance
     * @return RequestedPackageLineItem
     */
    public function setItemDescriptionForClearance($itemDescriptionForClearance) {
        return $this->ItemDescriptionForClearance = $itemDescriptionForClearance;
    }

    /**
     * @param CustomerReference $customerReferences
     * @return RequestedPackageLineItem
     */
    public function setCustomerReferences($customerReferences) {
        return $this->CustomerReferences = $customerReferences;
    }

    /**
     * @param PackageSpecialServicesRequested $specialServicesRequested
     * @return RequestedPackageLineItem
     */
    public function setSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param ContentRecord $contentRecords
     * @return RequestedPackageLineItem
     */
    public function setContentRecords($contentRecords) {
        return $this->ContentRecords = $contentRecords;
    }

    /**
     * @param Commodity $commodities
     * @return RequestedPackageLineItem
     */
    public function setCommodities($commodities) {
        return $this->Commodities = $commodities;
    }

}
