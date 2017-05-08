<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ModifyDangerousGoodsHandlingUnitRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ModifyDangerousGoodsHandlingUnitRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ModifyDangerousGoodsHandlingUnitRequest';

    /**
     * @param string $uploadId
     * @return ModifyDangerousGoodsHandlingUnitRequest
     */
    public function setUploadId($uploadId) {
        return $this->UploadId = $uploadId;
    }

    /**
     * @param UploadedDangerousGoodsHandlingUnitGroup $handlingUnitGroup
     * @return ModifyDangerousGoodsHandlingUnitRequest
     */
    public function setHandlingUnitGroup($handlingUnitGroup) {
        return $this->HandlingUnitGroup = $handlingUnitGroup;
    }

}
