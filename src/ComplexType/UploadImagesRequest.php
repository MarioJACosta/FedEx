<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadImagesRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadImagesRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadImagesRequest';

    /**
     * @param UploadImageDetail $images
     * @return UploadImagesRequest
     */
    public function setImages($images) {
        return $this->Images = $images;
    }
}
