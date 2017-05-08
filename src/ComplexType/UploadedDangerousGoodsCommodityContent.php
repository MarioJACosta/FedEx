<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadedDangerousGoodsCommodityContent
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadedDangerousGoodsCommodityContent extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadedDangerousGoodsCommodityContent';

    /**
     * @param UploadedDangerousGoodsCommodityDescription $description
     * @return UploadedDangerousGoodsCommodityContent
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param DangerousGoodsCommodityQuantityDetail $quantity
     * @return UploadedDangerousGoodsCommodityContent
     */
    public function setQuantity($quantity) {
        return $this->Description = $quantity;
    }

    /**
     * @param DangerousGoodsInnerReceptacleDetail $innerReceptacles
     * @return UploadedDangerousGoodsCommodityContent
     */
    public function setInnerReceptacles($innerReceptacles) {
        return $this->InnerReceptacles = $innerReceptacles;
    }

    /**
     * @param DangerousGoodsRadionuclideDetail $radionuclideDetail
     * @return UploadedDangerousGoodsCommodityContent
     */
    public function setRadionuclideDetail($radionuclideDetail) {
        return $this->RadionuclideDetail = $radionuclideDetail;
    }

    /**
     * @param NetExplosiveDetail $netExplosiveDetail
     * @return UploadedDangerousGoodsCommodityContent
     */
    public function setNetExplosiveDetail($netExplosiveDetail) {
        return $this->NetExplosiveDetail = $netExplosiveDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadedDangerousGoodsCommodityContent
     */
    public function setUploadedDangerousGoodsCommodityContent(array $param) {

        $description = new UploadedDangerousGoodsCommodityDescription();
        $quantity = new DangerousGoodsCommodityQuantityDetail();
        $innerReceptacles = new DangerousGoodsInnerReceptacleDetail();
        $radionuclideDetail = new DangerousGoodsRadionuclideDetail();
        $netExplosiveDetail = new NetExplosiveDetail();

        $uploadedDangerousGoodsCommodityContent = new UploadedDangerousGoodsCommodityContent();
        $uploadedDangerousGoodsCommodityContent->setDescription($description->setUploadedDangerousGoodsCommodityDescription(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12])));
        $uploadedDangerousGoodsCommodityContent->setQuantity($quantity->setDangerousGoodsCommodityQuantityDetail(array($param[13], $param[14], $param[15])));
        $uploadedDangerousGoodsCommodityContent->setInnerReceptacles($innerReceptacles->setQuantity($quantity->setDangerousGoodsCommodityQuantityDetail(array($param[16], $param[17], $param[18]))));
        $uploadedDangerousGoodsCommodityContent->setRadionuclideDetail($radionuclideDetail->setDangerousGoodsRadionuclideDetail(array($param[19], $param[20], $param[21], $param[22], $param[23])));
        $uploadedDangerousGoodsCommodityContent->setNetExplosiveDetail($netExplosiveDetail->setNetExplosiveDetail(array($param[24], $param[25], $param[26])));

        return $uploadedDangerousGoodsCommodityContent;
    }

}
