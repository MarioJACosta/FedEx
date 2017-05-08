<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PalletShrinkwrapDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PalletShrinkwrapDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PalletShrinkwrapDetail';

    /**
     * @param integer $palletCount
     * @return PalletShrinkwrapDetail
     */
    public function setPalletCount($palletCount) {
        return $this->PalletCount = $palletCount;
    }

}
