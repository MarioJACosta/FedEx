<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ClientDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ClientDetail';

    /**
     * @param string $accountNumber
     * @return ClientDetail
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }

    /**
     * @param string $meterNumber
     * @return ClientDetail
     */
    public function setMeterNumber($meterNumber) {
        return $this->MeterNumber = $meterNumber;
    }

    /**
     * @param string $integratorId
     * @return ClientDetail
     */
    public function setIntegratorId($integratorId) {
        return $this->IntegratorId = $integratorId;
    }

    /**
     * @param Localization $localization
     * @return ClientDetail
     */
    public function setLocalization($localization) {
        return $this->Localization = $localization;
    }

    /**
     * @param ExpressRegionCode $region
     * @return ClientDetail
     */
    public function setRegion($region) {
        return $this->Region = $region;
    }

}
