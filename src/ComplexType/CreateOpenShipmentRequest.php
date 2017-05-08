<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CreateOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CreateOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CreateOpenShipmentRequest';

    /**
     * @param AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @return CreateOpenShipmentRequest
     */
    public function setAsynchronousProcessingOptions($asynchronousProcessingOptions) {
        return $this->AsynchronousProcessingOptions = $asynchronousProcessingOptions;
    }

    /**
     * @param string $index
     * @return CreateOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

    /**
     * @param ConsolidationKey $consolidationKey
     * @return CreateOpenShipmentRequest
     */
    public function setConsolidationKey($consolidationKey) {
        return $this->ConsolidationKey = $consolidationKey;
    }

    /**
     * @param string $actions
     * @return CreateOpenShipmentRequest
     */
    public function setActions($actions) {
        return $this->Actions = $actions;
    }

    /**
     * @param RequestedShipment $requestedShipment
     * @return CreateOpenShipmentRequest
     */
    public function setRequestedShipment($requestedShipment) {
        return $this->RequestedShipment = $requestedShipment;
    }

}
