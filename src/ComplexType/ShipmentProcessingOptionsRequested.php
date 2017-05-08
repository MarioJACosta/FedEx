<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentProcessingOptionsRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentProcessingOptionsRequested extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentProcessingOptionsRequested';

    /**
     * @param string $options
     * @return ShipmentProcessingOptionsRequested
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

}
