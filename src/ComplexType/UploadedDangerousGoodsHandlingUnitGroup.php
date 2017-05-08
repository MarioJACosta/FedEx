<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadedDangerousGoodsHandlingUnitGroup
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadedDangerousGoodsHandlingUnitGroup extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadedDangerousGoodsHandlingUnitGroup';

    /**
     * @param string $id
     * @return UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setId($id) {
        return $this->Id = $id;
    }

    /**
     * @param string $description
     * @return UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param integer $numberOfHandlingUnits
     * @return UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setNumberOfHandlingUnits($numberOfHandlingUnits) {
        return $this->NumberOfHandlingUnits = $numberOfHandlingUnits;
    }

    /**
     * @param TrackingNumberUnit $trackingNumberUnits
     * @return UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setTrackingNumberUnits($trackingNumberUnits) {
        return $this->TrackingNumberUnits = $trackingNumberUnits;
    }

    /**
     * @param UploadedDangerousGoodsHandlingUnit $handlingUnit
     * @return UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setHandlingUnit($handlingUnit) {
        return $this->HandlingUnit = $handlingUnit;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadedDangerousGoodsHandlingUnitGroup
     */
    public function setUploadedDangerousGoodsHandlingUnitGroup(array $param) {

        $trackingIds = new TrackingId();
        $trackingIds->setTrackingId(array($param[3], $param[4], $param[5], $param[6]));

        $trackingNumberUnits = new TrackingNumberUnits();
        $trackingNumberUnits->setTrackingIds($trackingIds);

        $handlingUnit = new UploadedDangerousGoodsHandlingUnit();

        $uploadedDangerousGoodsHandlingUnitGroup = new UploadedDangerousGoodsHandlingUnitGroup();
        $uploadedDangerousGoodsHandlingUnitGroup->setId($param[0]);
        $uploadedDangerousGoodsHandlingUnitGroup->setDescription($param[1]);
        $uploadedDangerousGoodsHandlingUnitGroup->setNumberOfHandlingUnits($param[2]);
        $uploadedDangerousGoodsHandlingUnitGroup->setTrackingNumberUnits($trackingNumberUnits);
        $uploadedDangerousGoodsHandlingUnitGroup->setHandlingUnit($handlingUnit->setUploadedDangerousGoodsHandlingUnit(array($param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41])));

        return $uploadedDangerousGoodsHandlingUnitGroup;
    }

}
