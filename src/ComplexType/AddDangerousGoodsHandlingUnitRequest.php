<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AddDangerousGoodsHandlingUnitRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AddDangerousGoodsHandlingUnitRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AddDangerousGoodsHandlingUnitRequest';

    /**
     * @param string $uploadId
     * @return AddDangerousGoodsHandlingUnitRequest
     */
    public function setUploadId($uploadId) {
        return $this->UploadId = $uploadId;
    }

    /**
     * @param UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroup
     * @return AddDangerousGoodsHandlingUnitRequest
     */
    public function setHandlingUnitGroup($handlingUnitGroup) {
        return $this->HandlingUnitGroup = $handlingUnitGroup;
    }

}
