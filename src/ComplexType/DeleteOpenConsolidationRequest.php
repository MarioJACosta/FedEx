<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeleteOpenConsolidationRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeleteOpenConsolidationRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeleteOpenConsolidationRequest';

    /**
     * @param ConsolidationKey $consolidationKey
     * @return DeleteOpenConsolidationRequest
     */
    public function setConsolidationKey($consolidationKey) {
        return $this->ConsolidationKey = $consolidationKey;
    }

    /**
     * @param TrackingId $trackingId
     * @return DeleteOpenConsolidationRequest
     */
    public function setTrackingId($trackingId) {
        return $this->TrackingId = $trackingId;
    }

}
