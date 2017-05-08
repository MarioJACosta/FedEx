<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HazardousCommodityInnerReceptacleDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HazardousCommodityInnerReceptacleDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HazardousCommodityInnerReceptacleDetail';

    /**
     * @param HazardousCommodityQuantityDetail $quantity
     * @return HazardousCommodityInnerReceptacleDetail
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }

}
