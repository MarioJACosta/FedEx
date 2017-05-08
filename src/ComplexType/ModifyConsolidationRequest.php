<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ModifyConsolidationRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ModifyConsolidationRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ModifyConsolidationRequest';

    /**
     * @param ConsolidationKey $consolidationKey
     * @return ModifyConsolidationRequest
     */
    public function setConsolidationKey($consolidationKey) {
        return $this->ConsolidationKey = $consolidationKey;
    }

    /**
     * @param RequestedConsolidation $requestedConsolidation
     * @return ModifyConsolidationRequest
     */
    public function setRequestedConsolidation($requestedConsolidation) {
        return $this->RequestedConsolidation = $requestedConsolidation;
    }

}
