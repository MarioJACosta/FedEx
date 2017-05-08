<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of GetModifyOpenShipmentResultsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class GetModifyOpenShipmentResultsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'GetModifyOpenShipmentResultsRequest';

    /**
     * @param string $jobId
     * @return GetModifyOpenShipmentResultsRequest
     */
    public function setJobId($jobId) {
        return $this->JobId = $jobId;
    }

}
