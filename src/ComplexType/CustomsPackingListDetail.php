<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomsPackingListDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomsPackingListDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomsPackingListDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return CustomsPackingListDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return CustomsPackingListDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * @param string $signatureName
     * @return CustomsPackingListDetail
     */
    public function setSignatureName($signatureName) {
        return $this->SignatureName = $signatureName;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomsPackingListDetail
     */
    public function setCustomsPackingListDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $customsPackingListDetail = new CustomsPackingListDetail();
        $customsPackingListDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $customsPackingListDetail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[17], $param[18], $param[19], $param[20])));
        $customsPackingListDetail->setSignatureName($param[21]);

        return $customsPackingListDetail;
    }

}
