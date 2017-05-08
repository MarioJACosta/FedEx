<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Money
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Money extends AbstractComplexType {

    /**
     *
     * @var string
     */
    protected $_name = 'Money';

    /**
     * @param integer $amount
     * @return Money
     */
    public function setAmount($amount) {
        return $this->Amount = $amount;
    }

    /**
     * @param string $currency
     * @return Money
     */
    public function setCurrency($currency) {
        return $this->Currency = $currency;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Money
     */
    public function setMoney(array $param) {

        $money = new Money();
        $money->setAmount($param[0]);
        $money->setCurrency($param[1]);

        return $money;
    }

}
