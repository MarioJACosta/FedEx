<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ModifyDangerousGoodsShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ModifyDangerousGoodsShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ModifyDangerousGoodsShipmentRequest';

    /**
     * @param string $uploadId
     * @return ModifyDangerousGoodsShipmentRequest
     */
    public function setUploadId($uploadId) {
        return $this->UploadId = $uploadId;
    }

    /**
     * @param UploadedDangerousGoodsShipmentDetail $shipmentDetail
     * @return ModifyDangerousGoodsShipmentRequest
     */
    public function setShipmentDetail($shipmentDetail) {
        return $this->ShipmentDetail = $shipmentDetail;
    }

}
