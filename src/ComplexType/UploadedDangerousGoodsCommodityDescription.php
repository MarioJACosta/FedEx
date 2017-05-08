<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadedDangerousGoodsCommodityDescription
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadedDangerousGoodsCommodityDescription extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadedDangerousGoodsCommodityDescription';

    /**
     * @param string $idType
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setIdType($idType) {
        return $this->IdType = $idType;
    }

    /**
     * @param string $id
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setId($id) {
        return $this->Id = $id;
    }

    /**
     * @param integer $sequenceNumber
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber) {
        return $this->SequenceNumber = $sequenceNumber;
    }

    /**
     * @param string $packingGroup
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setPackingGroup($packingGroup) {
        return $this->PackingGroup = $packingGroup;
    }

    /**
     * @param string $packingInstructions
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setPackingInstructions($packingInstructions) {
        return $this->PackingInstructions = $packingInstructions;
    }

    /**
     * @param string $aircraftCategoryType
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setAircraftCategoryType($aircraftCategoryType) {
        return $this->AircraftCategoryType = $aircraftCategoryType;
    }

    /**
     * @param string $properShippingName
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setProperShippingName($properShippingName) {
        return $this->ProperShippingName = $properShippingName;
    }

    /**
     * @param string $technicalName
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setTechnicalName($technicalName) {
        return $this->TechnicalName = $technicalName;
    }

    /**
     * @param string $primaryClass
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setPrimaryClass($primaryClass) {
        return $this->PrimaryClass = $primaryClass;
    }

    /**
     * @param string $subsidiaryClasses
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setSubsidiaryClasses($subsidiaryClasses) {
        return $this->SubsidiaryClasses = $subsidiaryClasses;
    }

    /**
     * @param boolean $reportableQuantity
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setReportableQuantity($reportableQuantity) {
        return $this->ReportableQuantity = $reportableQuantity;
    }

    /**
     * @param integer $percentage
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setPercentage($percentage) {
        return $this->Percentage = $percentage;
    }

    /**
     * @param string $authorizationInformation
     * @return UploadedDangerousGoodsCommodityDescription
     */
    public function setAuthorizationInformation($authorizationInformation) {
        return $this->AuthorizationInformation = $authorizationInformation;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadedDangerousGoodsCommodityDescription
     */
    public function setUploadedDangerousGoodsCommodityDescription(array $param) {

        $uploadedDangerousGoodsCommodityDescription = new UploadedDangerousGoodsCommodityDescription();
        $uploadedDangerousGoodsCommodityDescription->setIdType($param[0]);
        $uploadedDangerousGoodsCommodityDescription->setId($param[1]);
        $uploadedDangerousGoodsCommodityDescription->setSequenceNumber($param[2]);
        $uploadedDangerousGoodsCommodityDescription->setPackingGroup($param[3]);
        $uploadedDangerousGoodsCommodityDescription->setPackingInstructions($param[4]);
        $uploadedDangerousGoodsCommodityDescription->setAircraftCategoryType($param[5]);
        $uploadedDangerousGoodsCommodityDescription->setProperShippingName($param[6]);
        $uploadedDangerousGoodsCommodityDescription->setTechnicalName($param[7]);
        $uploadedDangerousGoodsCommodityDescription->setPrimaryClass($param[8]);
        $uploadedDangerousGoodsCommodityDescription->setSubsidiaryClasses($param[9]);
        $uploadedDangerousGoodsCommodityDescription->setReportableQuantity($param[10]);
        $uploadedDangerousGoodsCommodityDescription->setPercentage($param[11]);
        $uploadedDangerousGoodsCommodityDescription->setAuthorizationInformation($param[12]);

        return $uploadedDangerousGoodsCommodityDescription;
    }

}
