<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of FreightGuaranteeDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FreightGuaranteeDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FreightGuaranteeDetail';

    /**
     * @param string $type
     * @return FreightGuaranteeDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param Datetime $date
     * @return FreightGuaranteeDetail
     */
    public function setDate($date) {
        return $this->Date = $date;
    }

    /**
     * @param Datetime $time
     * @return FreightGuaranteeDetail
     */
    public function setTime($time) {
        return $this->Time = $time;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\FreightGuaranteeDetail
     */
    public function setFreightGuaranteeDetail(array $param) {
        $freightGuaranteeDetail = new FreightGuaranteeDetail();
        $freightGuaranteeDetail->setType($param[0]);
        $freightGuaranteeDetail->setDate($param[1]);
        $freightGuaranteeDetail->setTime($param[2]);

        return $freightGuaranteeDetail;
    }

}
