<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of GroundCloseWithDocumentsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class GroundCloseWithDocumentsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'GroundCloseWithDocumentsRequest';
    
    /**
     * @param datetime $closeDate
     * @return GroundCloseWithDocumentsRequest
     */
    public function setCloseDate($closeDate) {
        return $this->CloseDate = $closeDate;
    }
    
    /**
     * @param CloseDocumentSpecification $closeDocumentSpecification
     * @return GroundCloseWithDocumentsRequest
     */
    public function setCloseDocumentSpecification($closeDocumentSpecification) {
        return $this->CloseDocumentSpecification = $closeDocumentSpecification;
    }

}
