<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadedDangerousGoodsHandlingUnit
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadedDangerousGoodsHandlingUnit extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadedDangerousGoodsHandlingUnit';

    /**
     * @param string $attributes
     * @return UploadedDangerousGoodsHandlingUnit
     */
    public function setAttributes($attributes) {
        return $this->Attributes = $attributes;
    }

    /**
     * @param RadioactiveDangerousGoodsHandlingUnitDetail $radioactiveDetail
     * @return UploadedDangerousGoodsHandlingUnit
     */
    public function setRadioactiveDetail($radioactiveDetail) {
        return $this->RadioactiveDetail = $radioactiveDetail;
    }

    /**
     * @param UploadedDangerousGoodsContainerGroup $containerGroups
     * @return UploadedDangerousGoodsHandlingUnit
     */
    public function setContainerGroups($containerGroups) {
        return $this->ContainerGroups = $containerGroups;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadedDangerousGoodsHandlingUnit
     */
    public function setUploadedDangerousGoodsHandlingUnit(array $param) {

        $radioactiveDetail = new RadioactiveDangerousGoodsHandlingUnitDetail();
        $containerGroups = new UploadedDangerousGoodsContainerGroup();

        $uploadedDangerousGoodsHandlingUnit = new UploadedDangerousGoodsHandlingUnit();
        $uploadedDangerousGoodsHandlingUnit->setAttributes($param[0]);
        $uploadedDangerousGoodsHandlingUnit->setRadioactiveDetail($radioactiveDetail->setRadioactiveDangerousGoodsHandlingUnitDetail(array($param[1], $param[2], $param[3], $param[4])));
        $uploadedDangerousGoodsHandlingUnit->setContainerGroups($containerGroups->setUploadedDangerousGoodsContainerGroup(array($param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35])));

        return $uploadedDangerousGoodsHandlingUnit;
    }

}
