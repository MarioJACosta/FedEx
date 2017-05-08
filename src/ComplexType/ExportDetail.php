<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Country specific details of an International shipment
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ExportDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ExportDetail';

    /**
     * @param string $b13AFilingOption
     * @return ExportDetail
     */
    public function setB13AFilingOption($b13AFilingOption) {
        return $this->B13AFilingOption = $b13AFilingOption;
    }

    /**
     * @param string $exportComplianceStatement
     * @return ExportDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement) {
        return $this->ExportComplianceStatement = $exportComplianceStatement;
    }

    /**
     * @param string $permitNumber
     * @return ExportDetail
     */
    public function setPermitNumber($permitNumber) {
        return $this->PermitNumber = $permitNumber;
    }

    /**
     * @param DestinationControlDetail $destinationControlDetail
     * @return ExportDetail
     */
    public function setDestinationControlDetail($destinationControlDetail) {
        return $this->DestinationControlDetail = $destinationControlDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ExportDetail
     */
    public function setExportDetail(array $param) {

        $destinationControlDetail = new DestinationControlDetail();

        $exportDetail = new ExportDetail();
        $exportDetail->setB13AFilingOption($param[0]);
        $exportDetail->setExportComplianceStatement($param[1]);
        $exportDetail->setPermitNumber($param[2]);
        $exportDetail->setDestinationControlDetail($destinationControlDetail->setDestinationControlDetail(array($param[3], $param[4], $param[5])));

        return $exportDetail;
    }

}
