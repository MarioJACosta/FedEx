<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HazardousCommodityContent
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HazardousCommodityContent extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HazardousCommodityContent';

    /**
     * @param HazardousCommodityDescription $description
     * @return HazardousCommodityContent
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * @param HazardousCommodityQuantityDetail $quantity
     * @return HazardousCommodityContent
     */
    public function setQuantity($quantity) {
        return $this->Description = $quantity;
    }

    /**
     * @param HazardousCommodityInnerReceptaclesDetail $innerReceptacles
     * @return HazardousCommodityContent
     */
    public function setInnerReceptacles($innerReceptacles) {
        return $this->Description = $innerReceptacles;
    }

    /**
     * @param HazardousCommodityOptionDetail $options
     * @return HazardousCommodityContent
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

    /**
     * @param RadionuclideDetail $radionuclideDetail
     * @return HazardousCommodityContent
     */
    public function setRadionuclideDetail($radionuclideDetail) {
        return $this->RadionuclideDetail = $radionuclideDetail;
    }

    /**
     * @param NetExplosiveDetail $netExplosiveDetail
     * @return HazardousCommodityContent
     */
    public function setNetExplosiveDetail($netExplosiveDetail) {
        return $this->NetExplosiveDetail = $netExplosiveDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\HazardousCommodityContent
     */
    public function setHazardousCommodityContent(array $param) {

        $description = new HazardousCommodityDescription();
        $quantity = new HazardousCommodityQuantityDetail();
        $innerReceptacles = new HazardousCommodityInnerReceptacleDetail();
        $options = new HazardousCommodityOptionDetail();
        $radionuclideDetail = new RadionuclideDetail();
        $netExplosiveDetail = new NetExplosiveDetail();

        $hazardousCommodityContent = new HazardousCommodityContent();
        $hazardousCommodityContent->setDescription($description->setHazardousCommodityDescription(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14])));
        $hazardousCommodityContent->setQuantity($quantity->setHazardousCommodityQuantityDetail(array($param[15], $param[16], $param[17])));
        $hazardousCommodityContent->setInnerReceptacles($innerReceptacles->setQuantity(array($param[18], $param[19], $param[20])));
        $hazardousCommodityContent->setOptions($options->setHazardousCommodityOptionDetail(array($param[21], $param[22], $param[23], $param[24], $param[25])));
        $hazardousCommodityContent->setRadionuclideDetail($radionuclideDetail->setRadionuclideDetail(array($param[26], $param[27], $param[28], $param[29], $param[30], $param[31])));
        $hazardousCommodityContent->setNetExplosiveDetail($netExplosiveDetail->setNetExplosiveDetail(array($param[32], $param[33], $param[34])));

        return $hazardousCommodityContent;
    }

}
