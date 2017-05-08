<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SpecialEquipmentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SpecialEquipmentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SpecialEquipmentDetail';

    /**
     * @param SpecialEquipmentLineItem $lineItems
     * @return SpecialEquipmentDetail
     */
    public function setLineItems($lineItems) {
        return $this->LineItems = $lineItems;
    }

}
