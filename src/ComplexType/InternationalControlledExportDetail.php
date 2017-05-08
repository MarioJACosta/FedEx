<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of InternationalControlledExportDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class InternationalControlledExportDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'InternationalControlledExportDetail';

    /**
     * @param string $type
     * @return InternationalControlledExportDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $foreignTradeZoneCode
     * @return InternationalControlledExportDetail
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode) {
        return $this->ForeignTradeZoneCode = $foreignTradeZoneCode;
    }

    /**
     * @param string $entryNumber
     * @return InternationalControlledExportDetail
     */
    public function setEntryNumber($entryNumber) {
        return $this->EntryNumber = $entryNumber;
    }

    /**
     * @param string $licenseOrPermitNumber
     * @return InternationalControlledExportDetail
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber) {
        return $this->LicenseOrPermitNumber = $licenseOrPermitNumber;
    }

    /**
     * @param Datetime $licenseOrPermitExpirationDate
     * @return InternationalControlledExportDetail
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate) {
        return $this->LicenseOrPermitExpirationDate = $licenseOrPermitExpirationDate;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\InternationalControlledExportDetail
     */
    public function setInternationalControlledExportDetail(array $param) {
        $internationalControlledExportDetail = new InternationalControlledExportDetail();
        $internationalControlledExportDetail->setType($param[0]);
        $internationalControlledExportDetail->setForeignTradeZoneCode($param[1]);
        $internationalControlledExportDetail->setEntryNumber($param[2]);
        $internationalControlledExportDetail->setLicenseOrPermitNumber($param[3]);
        $internationalControlledExportDetail->setLicenseOrPermitExpirationDate($param[4]);

        return $internationalControlledExportDetail;
    }

}
