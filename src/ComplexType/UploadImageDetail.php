<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadImageDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadImageDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadImageDetail';

    /**
     * @param string $id
     * @return type
     */
    public function setId($id) {
        return $this->Id = $id;
    }

    /**
     * @param base64Binary $image
     * @return type
     */
    public function setImage($image) {
        return $this->Image = $image;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadImageDetail
     */
    public function setUploadImageDetail(array $param) {

        $uploadImageDetail = new UploadImageDetail();
        $uploadImageDetail->setId($param[0]);
        $uploadImageDetail->setImage($param[1]);

        return $uploadImageDetail;
    }

}
