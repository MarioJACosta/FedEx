<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of GetCreateOpenShipmentResultsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class GetCreateOpenShipmentResultsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'GetCreateOpenShipmentResultsRequest';

    /**
     * @param string $jobId
     * @return GetCreateOpenShipmentResultsRequest
     */
    public function setJobId($jobId) {
        return $this->JobId = $jobId;
    }

}
