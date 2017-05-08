<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CreateConsolidationRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CreateConsolidationRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CreateConsolidationRequest';

    /**
     * @param string $consolidationIndex
     * @return CreateConsolidationRequest
     */
    public function setConsolidationIndex($consolidationIndex) {
        return $this->ConsolidationIndex = $consolidationIndex;
    }

    /**
     * @param RequestedConsolidation $requestedConsolidation
     * @return CreateConsolidationRequest
     */
    public function setRequestedConsolidation($requestedConsolidation) {
        return $this->RequestedConsolidation = $requestedConsolidation;
    }

}
