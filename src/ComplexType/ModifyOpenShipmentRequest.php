<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ModifyOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ModifyOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ModifyOpenShipmentRequest';

    /**
     * @param AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @return ModifyOpenShipmentRequest
     */
    public function setAsynchronousProcessingOptions($asynchronousProcessingOptions) {
        return $this->AsynchronousProcessingOptions = $asynchronousProcessingOptions;
    }

    /**
     * @param string $index
     * @return ModifyOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

    /**
     * @param string $actions
     * @return ModifyOpenShipmentRequest
     */
    public function setActions($actions) {
        return $this->Actions = $actions;
    }

    /**
     * @param RequestedShipment $requestedShipment
     * @return ModifyOpenShipmentRequest
     */
    public function setRequestedShipment($requestedShipment) {
        return $this->RequestedShipment = $requestedShipment;
    }

}
