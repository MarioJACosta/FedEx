<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RetrieveConsolidationRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RetrieveConsolidationRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RetrieveConsolidationRequest';

    /**
     * @param ConsolidationKey $consolidationKey
     * @return RetrieveConsolidationRequest
     */
    public function setConsolidationKey($consolidationKey) {
        return $this->ConsolidationKey = $consolidationKey;
    }

}
