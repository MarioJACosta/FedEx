<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SpecialEquipmentLineItem
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SpecialEquipmentLineItem extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SpecialEquipmentLineItem';

    /**
     * @param string $type
     * @return SpecialEquipmentLineItem
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $duration
     * @return SpecialEquipmentLineItem
     */
    public function setDuration($duration) {
        return $this->Duration = $duration;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\SpecialEquipmentLineItem
     */
    public function setSpecialEquipmentLineItem(array $param) {
        $specialEquipmentLineItem = new SpecialEquipmentLineItem();
        $specialEquipmentLineItem->setType($param[0]);
        $specialEquipmentLineItem->setDuration($param[1]);

        return $specialEquipmentLineItem;
    }

}
