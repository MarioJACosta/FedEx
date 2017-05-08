<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeclarationCurrency
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeclarationCurrency extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeclarationCurrency';

    /**
     * @param string $value
     * @return DeclarationCurrency
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * @param string $currency
     * @return DeclarationCurrency
     */
    public function setCurrency($currency) {
        return $this->Currency = $currency;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DeclarationCurrency
     */
    public function setDeclarationCurrency(array $param) {

        $declarationCurrency = new DeclarationCurrency();
        $declarationCurrency->setValue($param[0]);
        $declarationCurrency->setCurrency($param[1]);

        return $declarationCurrency;
    }

}
