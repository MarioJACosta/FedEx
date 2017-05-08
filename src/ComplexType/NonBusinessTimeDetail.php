<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of NonBusinessTimeDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NonBusinessTimeDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'NonBusinessTimeDetail';

    /**
     * @param integer $personDays
     * @return NonBusinessTimeDetail
     */
    public function setPersonDays($personDays) {
        return $this->PersonDays = $personDays;
    }

    /**
     * @param integer $personHours
     * @return NonBusinessTimeDetail
     */
    public function setPersonHours($personHours) {
        return $this->PersonHours = $personHours;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\NonBusinessTimeDetail
     */
    public function setNonBusinessTimeDetail(array $param) {
        $nonBusinessTimeDetail = new NonBusinessTimeDetail();
        $nonBusinessTimeDetail->setPersonDays($param[0]);
        $nonBusinessTimeDetail->setPersonHours($param[1]);

        return $nonBusinessTimeDetail;
    }

}
