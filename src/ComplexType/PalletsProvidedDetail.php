<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PalletsProvidedDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PalletsProvidedDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PalletsProvidedDetail';

    /**
     * @param integer $palletCount
     * @return PalletsProvidedDetail
     */
    public function setPalletCount($palletCount) {
        return $this->PalletCount = $palletCount;
    }

}
