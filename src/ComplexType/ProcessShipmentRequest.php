<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ProcessShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ProcessShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ProcessShipmentRequest';

    /**
     * @param RequestedShipment $requestedShipment
     * @return ProcessShipmentRequest
     */
    public function setRequestedShipment($requestedShipment) {
        return $this->RequestedShipment = $requestedShipment;
    }

}
