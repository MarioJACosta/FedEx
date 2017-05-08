<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The instructions indicating how to print the Commercial Invoice( e.g. image type) Specifies characteristics of a shipping document to be produced.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CommercialInvoiceDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CommercialInvoiceDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return CommercialInvoiceDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return CommercialInvoiceDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CommercialInvoiceDetail
     */
    public function setCommercialInvoiceDetail(array $param) {

        $documentFormat = new ShippingDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $commercialInvoiceDetail = new CommercialInvoiceDetail();
        $commercialInvoiceDetail->setFormat($documentFormat->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $commercialInvoiceDetail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[17], $param[18], $param[19], $param[20])));

        return $commercialInvoiceDetail;
    }

}
