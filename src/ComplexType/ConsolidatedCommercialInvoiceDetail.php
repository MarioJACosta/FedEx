<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ConsolidatedCommercialInvoiceDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConsolidatedCommercialInvoiceDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConsolidatedCommercialInvoiceDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return ConsolidatedCommercialInvoiceDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return ConsolidatedCommercialInvoiceDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * @param string $signatureName
     * @return ConsolidatedCommercialInvoiceDetail
     */
    public function setSignatureName($signatureName) {
        return $this->SignatureName = $signatureName;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ConsolidatedCommercialInvoiceDetail
     */
    public function setConsolidatedCommercialInvoiceDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $consolidatedCommercialInvoiceDetail = new ConsolidatedCommercialInvoiceDetail();
        $consolidatedCommercialInvoiceDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $consolidatedCommercialInvoiceDetail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[17], $param[18], $param[19], $param[20])));
        $consolidatedCommercialInvoiceDetail->setSignatureName($param[21]);

        return $consolidatedCommercialInvoiceDetail;
    }

}
