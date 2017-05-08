<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadDangerousGoodsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadDangerousGoodsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadDangerousGoodsRequest';

    /**
     * @param UploadedDangerousGoodsShipmentDetail $shipmentDetail
     * @return UploadDangerousGoodsRequest
     */
    public function setShipmentDetail($shipmentDetail) {
        return $this->ShipmentDetail = $shipmentDetail;
    }
    
    /**
     * @param UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroups
     * @return UploadDangerousGoodsRequest
     */
    public function setHandlingUnitGroups($handlingUnitGroups) {
        return $this->HandlingUnitGroups = $handlingUnitGroups;
    }
}
