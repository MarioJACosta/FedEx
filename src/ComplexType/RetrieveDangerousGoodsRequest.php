<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RetrieveDangerousGoodsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RetrieveDangerousGoodsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RetrieveDangerousGoodsRequest';

    /**
     * @param string $uploadId
     * @return RetrieveDangerousGoodsRequest
     */
    public function setUploadId($uploadId) {
        return $this->UploadId = $uploadId;
    }

}
