<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RadioactivityDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RadioactivityDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RadioactivityDetail';

    /**
     * @param integer $transportIndex
     * @return RadioactivityDetail
     */
    public function setTransportIndex($transportIndex) {
        return $this->TransportIndex = $transportIndex;
    }

    /**
     * @param integer $surfaceReading
     * @return RadioactivityDetail
     */
    public function setSurfaceReading($surfaceReading) {
        return $this->SurfaceReading = $surfaceReading;
    }

    /**
     * @param integer $criticalitySafetyIndex
     * @return RadioactivityDetail
     */
    public function setCriticalitySafetyIndex($criticalitySafetyIndex) {
        return $this->CriticalitySafetyIndex = $criticalitySafetyIndex;
    }

    /**
     * @param Dimensions $dimensions
     * @return RadioactivityDetail
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\RadioactivityDetail
     */
    public function setRadioactivityDetail(array $param) {

        $dimensions = new Dimensions();

        $radioactivityDetail = new RadioactivityDetail();
        $radioactivityDetail->setTransportIndex($param[0]);
        $radioactivityDetail->setSurfaceReading($param[1]);
        $radioactivityDetail->setCriticalitySafetyIndex($param[2]);
        $radioactivityDetail->setDimensions($dimensions->setDimensions(array($param[3], $param[4], $param[5], $param[6])));

        return $radioactivityDetail;
    }

}
