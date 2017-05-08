<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of shipping label to be returned in the reply
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LabelSpecification extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'LabelSpecification';

    /**
     * @param ShippingDocumentDispositionDetail $dispositions
     * @return LabelSpecification
     */
    public function setDispositions($dispositions) {
        return $this->Dispositions = $dispositions;
    }

    /**
     * @param string $labelFormatType
     * @return LabelSpecification
     */
    public function setLabelFormatType($labelFormatType) {
        return $this->LabelFormatType = $labelFormatType;
    }

    /**
     * @param string $imageType
     * @return LabelSpecification
     */
    public function setImageType($imageType) {
        return $this->ImageType = $imageType;
    }

    /**
     * @param string $labelStockType
     * @return LabelSpecification
     */
    public function setLabelStockType($labelStockType) {
        return $this->LabelStockType = $labelStockType;
    }

    /**
     * @param string $labelPrintingOrientation
     * @return LabelSpecification
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation) {
        return $this->LabelPrintingOrientation = $labelPrintingOrientation;
    }

    /**
     * @param string $labelOrder
     * @return LabelSpecification
     */
    public function setLabelOrder($labelOrder) {
        return $this->LabelOrder = $labelOrder;
    }

    /**
     * @param ContactAndAddress $printedLabelOrigin
     * @return LabelSpecification
     */
    public function setPrintedLabelOrigin($printedLabelOrigin) {
        return $this->PrintedLabelOrigin = $printedLabelOrigin;
    }

    /**
     * @param CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * @return LabelSpecification
     */
    public function setCustomerSpecifiedDetail($customerSpecifiedDetail) {
        return $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
    }

    /**
     * @param string $labelRotation
     * @return LabelSpecification
     */
    public function setLabelRotation($labelRotation) {
        return $this->LabelRotation = $labelRotation;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\LabelSpecification
     */
    public function setLabelSpecification(array $param) {

        $dispositions = new ShippingDocumentDispositionDetail();
        $contactAndAddress = new ContactAndAddress();
        $customerSpecifiedDetail = new CustomerSpecifiedLabelDetail();

        $labelSpecification = new LabelSpecification();

        $labelSpecification->setDispositions($dispositions->setShippingDocumentDispositionDetail(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10])));
        $labelSpecification->setLabelFormatType($param[11]);
        $labelSpecification->setImageType($param[12]);
        $labelSpecification->setLabelStockType($param[13]);
        $labelSpecification->setLabelPrintingOrientation($param[14]);
        $labelSpecification->setLabelOrder($param[15]);
        $labelSpecification->setLabelRotation($param[16]);
        $labelSpecification->setPrintedLabelOrigin($contactAndAddress->setContactAndAddress(array($param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37])));
        $labelSpecification->setCustomerSpecifiedDetail($customerSpecifiedDetail->setCustomerSpecifiedLabelDetail(array($param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61], $param[62], $param[63], $param[64], $param[65], $param[66], $param[67], $param[68], $param[69], $param[70], $param[71], $param[72], $param[73], $param[74], $param[75], $param[76], $param[77], $param[78], $param[79], $param[80], $param[81], $param[82], $param[83], $param[84], $param[85], $param[86], $param[87], $param[88], $param[89], $param[90], $param[91], $param[92], $param[93])));

        return $labelSpecification;
    }

}
