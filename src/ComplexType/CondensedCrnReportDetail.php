<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CondensedCrnReportDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CondensedCrnReportDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CondensedCrnReportDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return CondensedCrnReportDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return CondensedCrnReportDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * @param string $signatureName
     * @return CondensedCrnReportDetail
     */
    public function setSignatureName($signatureName) {
        return $this->SignatureName = $signatureName;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CondensedCrnReportDetail
     */
    public function setCondensedCrnReportDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $condensedCrnReportDetail = new CondensedCrnReportDetail();
        $condensedCrnReportDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $condensedCrnReportDetail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[17], $param[18], $param[19], $param[20])));
        $condensedCrnReportDetail->setSignatureName($param[21]);

        return $condensedCrnReportDetail;
    }

}
