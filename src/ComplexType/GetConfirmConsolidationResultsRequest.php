<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of GetConfirmConsolidationResultsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class GetConfirmConsolidationResultsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'GetConfirmConsolidationResultsRequest';
    
    /**
     * @param string $jobId
     * @return GetConfirmConsolidationResultsRequest
     */
    public function setJobId($jobId) {
        return $this->JobId = $jobId;
    }

}
