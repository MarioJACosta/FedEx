<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Op950Detail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Op950Detail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'Op950Detail';

    /**
     * @param CloseDocumentFormat $format
     * @return Op950Detail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return Op950Detail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * @param string $signatureName
     * @return Op950Detail
     */
    public function setSignatureName($signatureName) {
        return $this->SignatureName = $signatureName;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Op950Detail
     */
    public function setOp950Detail(array $param) {

        $format = new CloseDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $op950Detail = new Op950Detail();
        $op950Detail->setFormat($format->setCloseDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17])));
        $op950Detail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[18], $param[19], $param[20], $param[21])));
        $op950Detail->setSignatureName($param[22]);

        return $op950Detail;
    }

}
