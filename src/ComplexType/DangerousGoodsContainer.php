<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DangerousGoodsContainer
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DangerousGoodsContainer extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DangerousGoodsContainer';

    /**
     * @param string $packingType
     * @return DangerousGoodsContainer
     */
    public function setPackingType($packingType) {
        return $this->PackingType = $packingType;
    }

    /**
     * @param string $containerType
     * @return DangerousGoodsContainer
     */
    public function setContainerType($containerType) {
        return $this->ContainerType = $containerType;
    }

    /**
     * @param string $radioactiveContainerClass
     * @return DangerousGoodsContainer
     */
    public function setRadioactiveContainerClass($radioactiveContainerClass) {
        return $this->RadioactiveContainerClass = $radioactiveContainerClass;
    }

    /**
     * @param integer $numberOfContainers
     * @return DangerousGoodsContainer
     */
    public function setNumberOfContainers($numberOfContainers) {
        return $this->NumberOfContainers = $numberOfContainers;
    }

    /**
     * @param HazardousCommodityContent $hazardousCommodities
     * @return DangerousGoodsContainer
     */
    public function setHazardousCommodities($hazardousCommodities) {
        return $this->HazardousCommodities = $hazardousCommodities;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DangerousGoodsContainer
     */
    public function setDangerousGoodsContainer(array $param) {

        $hazardousCommodities = new HazardousCommodityContent();

        $dangerousGoodsContainer = new DangerousGoodsContainer();
        $dangerousGoodsContainer->setPackingType($param[0]);
        $dangerousGoodsContainer->setContainerType($param[1]);
        $dangerousGoodsContainer->setRadioactiveContainerClass($param[2]);
        $dangerousGoodsContainer->setNumberOfContainers($param[3]);
        $dangerousGoodsContainer->setHazardousCommodities($hazardousCommodities->setHazardousCommodityContent(array($param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38])));

        return $dangerousGoodsContainer;
    }

}
