<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of NetExplosiveDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NetExplosiveDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'NetExplosiveDetail';

    /**
     * @param string $type
     * @return NetExplosiveDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param integr $amount
     * @return NetExplosiveDetail
     */
    public function setAmount($amount) {
        return $this->Amount = $amount;
    }

    /**
     * @param string $units
     * @return NetExplosiveDetail
     */
    public function setUnits($units) {
        return $this->Units = $units;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\NetExplosiveDetail
     */
    public function setNetExplosiveDetail(array $param) {

        $netExplosiveDetail = new NetExplosiveDetail();
        $netExplosiveDetail->setType($param[0]);
        $netExplosiveDetail->setAmount($param[1]);
        $netExplosiveDetail->setUnits($param[2]);

        return $netExplosiveDetail;
    }

}
