<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeleteDangerousGoodsHandlingUnitRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeleteDangerousGoodsHandlingUnitRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeleteDangerousGoodsHandlingUnitRequest';

    /**
     * @param string $uploadId
     * @return DeleteDangerousGoodsHandlingUnitRequest
     */
    public function setUploadId($uploadId) {
        return $this->UploadId = $uploadId;
    }

    /**
     * @param string $handlingUnitGroupId
     * @return DeleteDangerousGoodsHandlingUnitRequest
     */
    public function setHandlingUnitGroupId($handlingUnitGroupId) {
        return $this->HandlingUnitGroupId = $handlingUnitGroupId;
    }

    /**
     * @param string $trackingNumbers
     * @return DeleteDangerousGoodsHandlingUnitRequest
     */
    public function setTrackingNumbers($trackingNumbers) {
        return $this->TrackingNumbers = $trackingNumbers;
    }

}
