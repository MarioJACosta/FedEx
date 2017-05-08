<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ValidateOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ValidateOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ValidateOpenShipmentRequest';

    /**
     * @param string $index
     * @return ValidateOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

}
