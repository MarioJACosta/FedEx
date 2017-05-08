<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CrnReportDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CrnReportDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CrnReportDetail';

    /**
     * @param ShippingDocumentFormat $format
     * @return CrnReportDetail
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param CustomerImageUsage $customerImageUsages
     * @return CrnReportDetail
     */
    public function setCustomerImageUsages($customerImageUsages) {
        return $this->CustomerImageUsages = $customerImageUsages;
    }

    /**
     * @param string $signatureName
     * @return CrnReportDetail
     */
    public function setSignatureName($signatureName) {
        return $this->SignatureName = $signatureName;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CrnReportDetail
     */
    public function setCrnReportDetail(array $param) {

        $format = new ShippingDocumentFormat();
        $customerImageUsages = new CustomerImageUsage();

        $crnReportDetail = new CrnReportDetail();
        $crnReportDetail->setFormat($format->setShippingDocumentFormat(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
        $crnReportDetail->setCustomerImageUsages($customerImageUsages->setCustomerImageUsage(array($param[17], $param[18], $param[19], $param[20])));
        $crnReportDetail->setSignatureName($param[21]);

        return $crnReportDetail;
    }

}
