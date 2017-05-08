<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomConsolidationDocumentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomConsolidationDocumentDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CustomConsolidationDocumentDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return CustomConsolidationDocumentDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param string $labelPrintingOrientation
     * @return CustomConsolidationDocumentDetail
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation) {
        return $this->LabelPrintingOrientation = $labelPrintingOrientation;
    }

    /**
     * @param string $labelRotation
     * @return CustomConsolidationDocumentDetail
     */
    public function setLabelRotation($labelRotation) {
        return $this->LabelRotation = $labelRotation;
    }

    /**
     * @param string $specificationId
     * @return CustomConsolidationDocumentDetail
     */
    public function setSpecificationId($specificationId) {
        return $this->SpecificationId = $specificationId;
    }

    /**
     * @param string $customDocumentIdentifier
     * @return CustomConsolidationDocumentDetail
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier) {
        return $this->CustomDocumentIdentifier = $customDocumentIdentifier;
    }

    /**
     * @param DocTabContent $docTabContent
     * @return CustomConsolidationDocumentDetail
     */
    public function setDocTabContent($docTabContent) {
        return $this->DocTabContent = $docTabContent;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return CustomConsolidationDocumentDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * @param string $signatureName
     * @return CustomConsolidationDocumentDetail
     */
    public function setSignatureName($signatureName) {
        return $this->SignatureName = $signatureName;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomConsolidationDocumentDetail
     */
    public function setCustomConsolidationDocumentDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $docTabContent = new DocTabContent();

        $customConsolidationDocumentDetail = new CustomConsolidationDocumentDetail();
        $customConsolidationDocumentDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $customConsolidationDocumentDetail->setLabelPrintingOrientation($param[17]);
        $customConsolidationDocumentDetail->setLabelRotation($param[18]);
        $customConsolidationDocumentDetail->setSpecificationId($param[19]);
        $customConsolidationDocumentDetail->setCustomDocumentIdentifier($param[20]);
        $customConsolidationDocumentDetail->setDocTabContent($docTabContent->setDocTabContent(array($param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27])));

        return $customConsolidationDocumentDetail;
    }

}
