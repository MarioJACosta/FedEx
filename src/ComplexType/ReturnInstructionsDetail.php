<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the return instructions( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReturnInstructionsDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ReturnInstructionsDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return ReturnInstructionsDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param string $customText
     * @return ReturnInstructionsDetail
     */
    public function setCustomText($customText) {
        return $this->CustomText = $customText;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ReturnInstructionsDetail
     */
    public function setReturnInstructionsDetail(array $param) {

        $format = new ShippingDocumentFormat();

        $returnInstructionsDetail = new ReturnInstructionsDetail();
        $returnInstructionsDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $returnInstructionsDetail->setCustomText($param[17]);

        return $returnInstructionsDetail;
    }

}
