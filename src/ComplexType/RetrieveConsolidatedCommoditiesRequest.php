<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RetrieveConsolidatedCommoditiesRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RetrieveConsolidatedCommoditiesRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RetrieveConsolidatedCommoditiesRequest';

    /**
     * @param ConsolidationKey $consolidationKey
     * @return RetrieveConsolidatedCommoditiesRequest
     */
    public function setConsolidationKey($consolidationKey) {
        return $this->ConsolidationKey = $consolidationKey;
    }
}
