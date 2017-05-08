<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DangerousGoodsSignatory
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DangerousGoodsSignatory extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DangerousGoodsSignatory';

    /**
     * @param string $contactName
     * @return DangerousGoodsSignatory
     */
    public function setContactName($contactName) {
        return $this->ContactName = $contactName;
    }

    /**
     * @param string $title
     * @return DangerousGoodsSignatory
     */
    public function setTitle($title) {
        return $this->Title = $title;
    }

    /**
     * @param string $place
     * @return DangerousGoodsSignatory
     */
    public function setPlace($place) {
        return $this->Place = $place;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DangerousGoodsSignatory
     */
    public function setDangerousGoodsSignatory(array $param) {

        $dangerousGoodsSignatory = new DangerousGoodsSignatory();
        $dangerousGoodsSignatory->setContactName($param[0]);
        $dangerousGoodsSignatory->setTitle($param[1]);
        $dangerousGoodsSignatory->setPlace($param[2]);

        return $dangerousGoodsSignatory;
    }

}
