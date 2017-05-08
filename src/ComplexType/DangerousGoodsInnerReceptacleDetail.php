<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DangerousGoodsInnerReceptacleDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DangerousGoodsInnerReceptacleDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DangerousGoodsInnerReceptacleDetail';

    /**
     * @param DangerousGoodsCommodityQuantityDetail $quantity
     * @return DangerousGoodsInnerReceptacleDetail
     */
    public function setQuantity($quantity) {
        return $this->Quantity = $quantity;
    }
}
