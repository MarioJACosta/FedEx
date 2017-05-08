<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of GetConfirmOpenShipmentResultsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class GetConfirmOpenShipmentResultsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'GetConfirmOpenShipmentResultsRequest';

    /**
     * @param string $jobId
     * @return GetConfirmOpenShipmentResultsRequest
     */
    public function setJobId($jobId) {
        return $this->JobId = $jobId;
    }

}
