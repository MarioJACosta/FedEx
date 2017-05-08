<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CodAddTransportationChargesDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CodAddTransportationChargesDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CodAddTransportationChargesDetail';

    /**
     * @param string $rateTypeBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setRateTypeBasis($rateTypeBasis) {
        return $this->RateTypeBasis = $rateTypeBasis;
    }

    /**
     * @param string $chargeBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setChargeBasis($chargeBasis) {
        return $this->ChargeBasis = $chargeBasis;
    }

    /**
     * @param string $chargeBasisLevel
     * @return CodAddTransportationChargesDetail
     */
    public function setChargeBasisLevel($chargeBasisLevel) {
        return $this->ChargeBasisLevel = $chargeBasisLevel;
    }

    /**
     * @param string $rateLevelBasis
     * @return CodAddTransportationChargesDetail
     */
    public function setRateLevelBasis($rateLevelBasis) {
        return $this->RateLevelBasis = $rateLevelBasis;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CodAddTransportationChargesDetail
     */
    public function setCodAddTransportationChargesDetail(array $param) {

        $codAddTransportationChargesDetail = new CodAddTransportationChargesDetail();
        $codAddTransportationChargesDetail->setRateTypeBasis($param[0]);
        $codAddTransportationChargesDetail->setChargeBasis($param[1]);
        $codAddTransportationChargesDetail->setChargeBasisLevel($param[2]);
        $codAddTransportationChargesDetail->setRateLevelBasis($param[3]);

        return $codAddTransportationChargesDetail;
    }

}
