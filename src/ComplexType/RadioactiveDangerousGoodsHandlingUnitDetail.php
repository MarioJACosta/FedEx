<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RadioactiveDangerousGoodsHandlingUnitDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RadioactiveDangerousGoodsHandlingUnitDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RadioactiveDangerousGoodsHandlingUnitDetail';

    /**
     * @param integer $transportIndex
     * @return RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setTransportIndex($transportIndex) {
        return $this->TransportIndex = $transportIndex;
    }

    /**
     * @param integer $surfaceReading
     * @return RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setSurfaceReading($surfaceReading) {
        return $this->SurfaceReading = $surfaceReading;
    }

    /**
     * @param integer $criticalitySafetyIndex
     * @return RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setCriticalitySafetyIndex($criticalitySafetyIndex) {
        return $this->CriticalitySafetyIndex = $criticalitySafetyIndex;
    }

    /**
     * @param string $labelType
     * @return RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setLabelType($labelType) {
        return $this->LabelType = $labelType;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\RadioactiveDangerousGoodsHandlingUnitDetail
     */
    public function setRadioactiveDangerousGoodsHandlingUnitDetail(array $param) {

        $radioactiveDangerousGoodsHandlingUnitDetail = new RadioactiveDangerousGoodsHandlingUnitDetail();
        $radioactiveDangerousGoodsHandlingUnitDetail->setTransportIndex($param[0]);
        $radioactiveDangerousGoodsHandlingUnitDetail->setSurfaceReading($param[1]);
        $radioactiveDangerousGoodsHandlingUnitDetail->setCriticalitySafetyIndex($param[2]);
        $radioactiveDangerousGoodsHandlingUnitDetail->setLabelType($param[3]);

        return $radioactiveDangerousGoodsHandlingUnitDetail;
    }

}
