<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of GroundCloseReportsReprintRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class GroundCloseReportsReprintRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'GroundCloseReportsReprintRequest';

    /**
     * @param Datetime $reportDate
     * @return GroundCloseReportsReprintRequest
     */
    public function setReportDate($reportDate) {
        return $this->ReportDate = $reportDate;
    }

    /**
     * @param string $trackingNumber
     * @return GroundCloseReportsReprintRequest
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

    /**
     * @param string $closeReportType
     * @return GroundCloseReportsReprintRequest
     */
    public function setCloseReportType($closeReportType) {
        return $this->CloseReportType = $closeReportType;
    }

}
