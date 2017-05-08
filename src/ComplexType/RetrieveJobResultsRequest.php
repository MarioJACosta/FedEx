<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RetrieveJobResultsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RetrieveJobResultsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RetrieveJobResultsRequest';

    /**
     * @param string $jobId
     * @return RetrieveJobResultsRequest
     */
    public function setJobId($jobId) {
        return $this->JobId = $jobId;
    }

    /**
     * @param string $filters
     * @return RetrieveJobResultsRequest
     */
    public function setFilters($filters) {
        return $this->Filters = $filters;
    }

}
