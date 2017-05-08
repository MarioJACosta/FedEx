<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SmartPostShipmentProcessingOptionsRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SmartPostShipmentProcessingOptionsRequested extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'SmartPostShipmentProcessingOptionsRequested';

    /**
     * @param string $options
     * @return SmartPostShipmentProcessingOptionsRequested
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

}
