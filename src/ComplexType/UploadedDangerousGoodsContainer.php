<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadedDangerousGoodsContainer
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadedDangerousGoodsContainer extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadedDangerousGoodsContainer';

    /**
     * @param string $attributes
     * @return UploadedDangerousGoodsContainer
     */
    public function setAttributes($attributes) {
        return $this->Attributes = $attributes;
    }

    /**
     * @param string $containerType
     * @return UploadedDangerousGoodsContainer
     */
    public function setContainerType($containerType) {
        return $this->ContainerType = $containerType;
    }

    /**
     * @param integer $qValue
     * @return UploadedDangerousGoodsContainer
     */
    public function setQValue($qValue) {
        return $this->QValue = $qValue;
    }

    /**
     * @param UploadedDangerousGoodsCommodityContent $commodities
     * @return UploadedDangerousGoodsContainer
     */
    public function setCommodities($commodities) {
        return $this->Commodities = $commodities;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadedDangerousGoodsContainer
     */
    public function setUploadedDangerousGoodsContainer(array $param) {

        $commodities = new UploadedDangerousGoodsCommodityContent();

        $uploadedDangerousGoodsContainer = new UploadedDangerousGoodsContainer();
        $uploadedDangerousGoodsContainer->setAttributes($param[0]);
        $uploadedDangerousGoodsContainer->setContainerType($param[1]);
        $uploadedDangerousGoodsContainer->setQValue($param[2]);
        $uploadedDangerousGoodsContainer->setCommodities($commodities->setUploadedDangerousGoodsCommodityContent(array($param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30])));

        return $uploadedDangerousGoodsContainer;
    }

}
