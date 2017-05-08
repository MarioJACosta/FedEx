<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeleteDangerousGoodsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeleteDangerousGoodsRequest extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'DeleteDangerousGoodsRequest';

    /**
     * @param string $uploadId
     * @return DeleteDangerousGoodsRequest
     */
    public function setUploadId($uploadId) {
        return $this->UploadId = $uploadId;
    }

}
