<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PendingShipmentProcessingOptionsRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PendingShipmentProcessingOptionsRequested extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PendingShipmentProcessingOptionsRequested';

    /**
     * @param string $options
     * @return PendingShipmentProcessingOptionsRequested
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

}
