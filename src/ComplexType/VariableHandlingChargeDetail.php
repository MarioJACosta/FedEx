<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This definition of variable handling charge detail is intended for use in Jan 2011 corp load.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class VariableHandlingChargeDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'VariableHandlingChargeDetail';

    /**
     * @param Money $fixedValue
     * @return VariableHandlingChargeDetail
     */
    public function setFixedValue($fixedValue) {
        return $this->FixedValue = $fixedValue;
    }

    /**
     * @param integer $percentValue
     * @return VariableHandlingChargeDetail
     */
    public function setPercentValue($percentValue) {
        return $this->PercentValue = $percentValue;
    }

    /**
     * @param string $rateElementBasis
     * @return VariableHandlingChargeDetail
     */
    public function setRateElementBasis($rateElementBasis) {
        return $this->RateElementBasis = $rateElementBasis;
    }

    /**
     * @param string $rateTypeBasis
     * @return VariableHandlingChargeDetail
     */
    public function setRateTypeBasis($rateTypeBasis) {
        return $this->RateTypeBasis = $rateTypeBasis;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\VariableHandlingChargeDetail
     */
    public function setVariableHandlingChargeDetail(array $param) {

        $money = new Money();

        $variableHandlingChargeDetail = new VariableHandlingChargeDetail();
        $variableHandlingChargeDetail->setFixedValue($money->setMoney(array($param[0], $param[1])));
        $variableHandlingChargeDetail->setPercentValue($param[2]);
        $variableHandlingChargeDetail->setRateElementBasis($param[3]);
        $variableHandlingChargeDetail->setRateTypeBasis($param[4]);

        return $variableHandlingChargeDetail;
    }

}
