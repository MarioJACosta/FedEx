<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadedDangerousGoodsContainerGroup
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadedDangerousGoodsContainerGroup extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadedDangerousGoodsContainerGroup';

    /**
     * @param integer $numberOfIdenticalContainers
     * @return UploadedDangerousGoodsContainerGroup
     */
    public function setNumberOfIdenticalContainers($numberOfIdenticalContainers) {
        return $this->NumberOfIdenticalContainers = $numberOfIdenticalContainers;
    }

    /**
     * @param UploadedDangerousGoodsContainer $container
     * @return UploadedDangerousGoodsContainerGroup
     */
    public function setContainer($container) {
        return $this->Container = $container;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadedDangerousGoodsContainerGroup
     */
    public function setUploadedDangerousGoodsContainerGroup(array $param) {

        $container = new UploadedDangerousGoodsContainer();

        $uploadedDangerousGoodsContainerGroup = new UploadedDangerousGoodsContainerGroup();
        $uploadedDangerousGoodsContainerGroup->setNumberOfIdenticalContainers($param[0]);
        $uploadedDangerousGoodsContainerGroup->setContainer($container->setUploadedDangerousGoodsContainer(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31])));

        return $uploadedDangerousGoodsContainerGroup;
    }

}
