<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Allows customer-specified control of label content
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomerSpecifiedLabelDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CustomerSpecifiedLabelDetail';

    /**
     * @param DocTabContent $docTabContent
     * @return CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent($docTabContent) {
        return $this->DocTabContent = $docTabContent;
    }

    /**
     * @param string $customContentPosition
     * @return CustomerSpecifiedLabelDetail
     */
    public function setCustomContentPosition($customContentPosition) {
        return $this->CustomContentPosition = $customContentPosition;
    }

    /**
     * @param CustomLabelDetail $customContent
     * @return CustomerSpecifiedLabelDetail
     */
    public function setCustomContent($customContent) {
        return $this->CustomContent = $customContent;
    }

    /**
     * @param ConfigurableLabelReferenceEntry $configurableReferenceEntries
     * @return CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries($configurableReferenceEntries) {
        return $this->ConfigurableReferenceEntries = $configurableReferenceEntries;
    }

    /**
     * @param string $maskedData
     * @return CustomerSpecifiedLabelDetail
     */
    public function setMaskedData($maskedData) {
        return $this->MaskedData = $maskedData;
    }

    /**
     * @param string $secondaryBarcode
     * @return CustomerSpecifiedLabelDetail
     */
    public function setSecondaryBarcode($secondaryBarcode) {
        return $this->SecondaryBarcode = $secondaryBarcode;
    }

    /**
     * @param Localization $termsAndConditionsLocalization
     * @return CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization($termsAndConditionsLocalization) {
        return $this->TermsAndConditionsLocalization = $termsAndConditionsLocalization;
    }

    /**
     * @param RegulatoryLabelContentDetail $regulatoryLabels
     * @return CustomerSpecifiedLabelDetail
     */
    public function setRegulatoryLabels($regulatoryLabels) {
        return $this->RegulatoryLabels = $regulatoryLabels;
    }

    /**
     * @param AdditionalLabelsDetail $additionalLabels
     * @return CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels($additionalLabels) {
        return $this->AdditionalLabels = $additionalLabels;
    }

    /**
     * @param integer $airWaybillSuppressionCount
     * @return CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount) {
        return $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomerSpecifiedLabelDetail
     */
    public function setCustomerSpecifiedLabelDetail(array $param) {

        $docTabContent = new DocTabContent();
        $customLabelDetail = new CustomLabelDetail();
        $configurableReferenceEntries = new ConfigurableLabelReferenceEntry();
        $localization = new Localization();
        $regulatoryLabelContentDetail = new RegulatoryLabelContentDetail();
        $additionalLabels = new AdditionalLabelsDetail();


        $customerSpecifiedLabelDetail = new CustomerSpecifiedLabelDetail();

        $customerSpecifiedLabelDetail->setDocTabContent($docTabContent->setDocTabContent(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6])));
        $customerSpecifiedLabelDetail->setCustomContentPosition($param[7]);
        $customerSpecifiedLabelDetail->setCustomContent($customLabelDetail->setCustomLabelDetail(array($param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43])));
        $customerSpecifiedLabelDetail->setConfigurableReferenceEntries($configurableReferenceEntries->setConfigurableLabelReferenceEntry(array($param[44], $param[45], $param[46], $param[47])));
        $customerSpecifiedLabelDetail->setMaskedData($param[48]);
        $customerSpecifiedLabelDetail->setSecondaryBarcode($param[49]);
        $customerSpecifiedLabelDetail->setTermsAndConditionsLocalization($localization->setLocalization(array($param[50], $param[51])));
        $customerSpecifiedLabelDetail->setRegulatoryLabels($regulatoryLabelContentDetail->setRegulatoryLabelContentDetail(array($param[52], $param[53])));
        $customerSpecifiedLabelDetail->setAdditionalLabels($additionalLabels->setAdditionalLabelsDetail(array($param[54], $param[55])));
        $customerSpecifiedLabelDetail->setAirWaybillSuppressionCount($param[56]);

        return $customerSpecifiedLabelDetail;
    }

}
