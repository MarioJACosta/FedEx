<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ReprintGroundCloseDocumentsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ReprintGroundCloseDocumentsRequest extends AbstractComplexType {
    
    /**
     * @var string
     */
    protected $_name = 'ReprintGroundCloseDocumentsRequest';
    
    /**
     * @param string $reprintOption
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setReprintOption($reprintOption) {
        return $this->ReprintOption = $reprintOption;
    }
    
    /**
     * @param Datetime $closeDate
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDate($closeDate) {
        return $this->CloseDate = $closeDate;
    }
    
    /**
     * @param string $trackingNumber
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber =$trackingNumber;
    }
    
    /**
     * @param CloseDocumentSpecification $closeDocumentSpecification
     * @return ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDocumentSpecification($closeDocumentSpecification) {
        return $this->CloseDocumentSpecification = $closeDocumentSpecification;
    }
}
