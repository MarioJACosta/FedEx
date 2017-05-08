<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HazardousCommodityDescription
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HazardousCommodityDescription extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HazardousCommodityDescription';

    /**
     * @param string $id
     * @return HazardousCommodityDescription
     */
    public function setId($id) {
        return $this->Id = $id;
    }

    /**
     * @param integer $sequenceNumber
     * @return HazardousCommodityDescription
     */
    public function setSequenceNumber($sequenceNumber) {
        return $this->SequenceNumber = $sequenceNumber;
    }

    /**
     * @param string $packingGroup
     * @return HazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup) {
        return $this->PackingGroup = $packingGroup;
    }

    /**
     * @param HazardousCommodityPackingDetail $packingDetails
     * @return HazardousCommodityDescription
     */
    public function setPackingDetails($packingDetails) {
        return $this->PackingDetails = $packingDetails;
    }

    /**
     * @param boolean $reportableQuantity
     * @return HazardousCommodityDescription
     */
    public function setReportableQuantity($reportableQuantity) {
        return $this->ReportableQuantity = $reportableQuantity;
    }

    /**
     * @param string $properShippingName
     * @return HazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName) {
        return $this->ProperShippingName = $properShippingName;
    }

    /**
     * @param string $technicalName
     * @return HazardousCommodityDescription
     */
    public function setTechnicalName($technicalName) {
        return $this->TechnicalName = $technicalName;
    }

    /**
     * @param integer $percentage
     * @return HazardousCommodityDescription
     */
    public function setPercentage($percentage) {
        return $this->Percentage = $percentage;
    }

    /**
     * @param string $hazardClass
     * @return HazardousCommodityDescription
     */
    public function setHazardClass($hazardClass) {
        return $this->HazardClass = $hazardClass;
    }

    /**
     * @param string $subsidiaryClasses
     * @return HazardousCommodityDescription
     */
    public function setSubsidiaryClasses($subsidiaryClasses) {
        return $this->SubsidiaryClasses = $subsidiaryClasses;
    }

    /**
     * @param string $labelText
     * @return HazardousCommodityDescription
     */
    public function setLabelText($labelText) {
        return $this->LabelText = $labelText;
    }

    /**
     * @param string $processingOptions
     * @return HazardousCommodityDescription
     */
    public function setProcessingOptions($processingOptions) {
        return $this->ProcessingOptions = $processingOptions;
    }

    /**
     * @param string $authorization
     * @return HazardousCommodityDescription
     */
    public function setAuthorization($authorization) {
        return $this->Authorization = $authorization;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\HazardousCommodityDescription
     */
    public function setHazardousCommodityDescription(array $param) {

        $packingDetails = new HazardousCommodityPackingDetail();

        $hazardousCommodityDescription = new HazardousCommodityDescription();
        $hazardousCommodityDescription->setId($param[0]);
        $hazardousCommodityDescription->setSequenceNumber($param[1]);
        $hazardousCommodityDescription->setPackingGroup($param[2]);
        $hazardousCommodityDescription->setPackingDetails($packingDetails->setHazardousCommodityPackingDetail(array($param[3], $param[4])));
        $hazardousCommodityDescription->setReportableQuantity($param[5]);
        $hazardousCommodityDescription->setProperShippingName($param[6]);
        $hazardousCommodityDescription->setTechnicalName($param[7]);
        $hazardousCommodityDescription->setPercentage($param[8]);
        $hazardousCommodityDescription->setHazardClass($param[9]);
        $hazardousCommodityDescription->setSubsidiaryClasses($param[10]);
        $hazardousCommodityDescription->setLabelText($param[11]);
        $hazardousCommodityDescription->setProcessingOptions($param[12]);
        $hazardousCommodityDescription->setAuthorization($param[13]);

        return $hazardousCommodityDescription;
    }

}
