<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ConsolidatedPartyReportDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConsolidatedPartyReportDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConsolidatedPartyReportDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return ConsolidatedPartyReportDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return ConsolidatedPartyReportDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * @param string $signatureName
     * @return ConsolidatedPartyReportDetail
     */
    public function setSignatureName($signatureName) {
        return $this->SignatureName = $signatureName;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ConsolidatedPartyReportDetail
     */
    public function setConsolidatedPartyReportDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $consolidatedPartyReportDetail = new ConsolidatedPartyReportDetail();
        $consolidatedPartyReportDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $consolidatedPartyReportDetail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[17], $param[18], $param[19], $param[20])));
        $consolidatedPartyReportDetail->setSignatureName($param[21]);

        return $consolidatedPartyReportDetail;
    }

}
