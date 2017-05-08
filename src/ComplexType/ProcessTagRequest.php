<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data sent to FedEx by a customer in order to ship a package.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ProcessTagRequest extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ProcessTagRequest';

    /**
     * @param RequestedShipment $requestedShipment
     * @return ProcessTagRequest
     */
    public function setRequestedShipment($requestedShipment) {
        return $this->RequestedShipment = $requestedShipment;
    }

}
