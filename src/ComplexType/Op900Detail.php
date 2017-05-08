<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the OP-900 form for hazardous materials packages.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Op900Detail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Op900Detail';

    /**
     * @param ShippingDocumentFormat $format
     * @return Op900Detail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param string $reference
     * @return Op900Detail
     */
    public function setReference($reference) {
        return $this->Reference = $reference;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return Op900Detail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * @param string $signatureName
     * @return Op900Detail
     */
    public function setSignatureName($signatureName) {
        return $this->SignatureName = $signatureName;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Op900Detail
     */
    public function setOp900Detail(array $param) {

        $format = new ShippingDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $op900Detail = new Op900Detail();
        $op900Detail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $op900Detail->setReference($param[17]);
        $op900Detail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[18], $param[19], $param[20], $param[21])));
        $op900Detail->setSignatureName($param[22]);

        return $op900Detail;
    }

}
