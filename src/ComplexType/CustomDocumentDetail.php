<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required to produce a custom-specified document, either at shipment or package level.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomDocumentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomDocumentDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return CustomDocumentDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param string $labelPrintingOrientation
     * @return CustomDocumentDetail
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation) {
        return $this->LabelPrintingOrientation = $labelPrintingOrientation;
    }

    /**
     * @param string $labelRotation
     * @return CustomDocumentDetail
     */
    public function setLabelRotation($labelRotation) {
        return $this->LabelRotation = $labelRotation;
    }

    /**
     * @param string $specificationId
     * @return CustomDocumentDetail
     */
    public function setSpecificationId($specificationId) {
        return $this->SpecificationId = $specificationId;
    }

    /**
     * @param string $customDocumentIdentifier
     * @return CustomDocumentDetail
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier) {
        return $this->CustomDocumentIdentifier = $customDocumentIdentifier;
    }

    /**
     * @param DocTabContent $docTabContent
     * @return CustomDocumentDetail
     */
    public function setDocTabContent($docTabContent) {
        return $this->DocTabContent = $docTabContent;
    }

    /**
     * @param CustomLabelDetail $customContent
     * @return CustomDocumentDetail
     */
    public function setCustomContent($customContent) {
        return $this->CustomContent = $customContent;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomDocumentDetail
     */
    public function setCustomDocumentDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $docTabContent = new DocTabContent();
        $customContent = new CustomLabelDetail();

        $customDocumentDetail = new CustomDocumentDetail();
        $customDocumentDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $customDocumentDetail->setLabelPrintingOrientation($param[17]);
        $customDocumentDetail->setLabelRotation($param[18]);
        $customDocumentDetail->setSpecificationId($param[19]);
        $customDocumentDetail->setCustomDocumentIdentifier($param[20]);
        $customDocumentDetail->setDocTabContent($docTabContent->setDocTabContent(array($param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27])));
        $customDocumentDetail->setCustomContent($customContent->setCustomLabelDetail(array($param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62])));

        return $customDocumentDetail;
    }

}
