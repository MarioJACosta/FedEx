<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ValidateDangerousGoodsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ValidateDangerousGoodsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ValidateDangerousGoodsRequest';
    
    /**
     * @param UploadedDangerousGoodsShipmentDetail $shipmentDetail
     * @return ValidateDangerousGoodsRequest
     */
    public function setShipmentDetail($shipmentDetail) {
        return $this->ShipmentDetail = $shipmentDetail;
    }
    
    /**
     * @param UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroups
     * @return ValidateDangerousGoodsRequest
     */
    public function setHandlingUnitGroups($handlingUnitGroups) {
        return $this->HandlingUnitGroups = $handlingUnitGroups;
    }

}
