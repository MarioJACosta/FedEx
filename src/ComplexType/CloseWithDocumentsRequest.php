<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CloseWithDocumentsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CloseWithDocumentsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CloseWithDocumentsRequest';

    /**
     * @param string $actionType
     * @return CloseWithDocumentsRequest
     */
    public function setActionType($actionType) {
        return $this->ActionType = $actionType;
    }

    /**
     * @param CloseWithDocumentsProcessingOptionsRequested $processingOptions
     * @return CloseWithDocumentsRequest
     */
    public function setProcessingOptions($processingOptions) {
        return $this->ProcessingOptions = $processingOptions;
    }

    /**
     * @param string $carrierCode
     * @return CloseWithDocumentsRequest
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

    /**
     * @param string $shippingCycle
     * @return CloseWithDocumentsRequest
     */
    public function setShippingCycle($shippingCycle) {
        return $this->ShippingCycle = $shippingCycle;
    }

    /**
     * @param Datetime $reprintCloseDate
     * @return CloseWithDocumentsRequest
     */
    public function setReprintCloseDate($reprintCloseDate) {
        return $this->ReprintCloseDate = $reprintCloseDate;
    }

    /**
     * @param CloseManifestReferenceDetail $manifestReferenceDetail
     * @return CloseWithDocumentsRequest
     */
    public function setManifestReferenceDetail($manifestReferenceDetail) {
        return $this->ManifestReferenceDetail = $manifestReferenceDetail;
    }
    
    /**
     * @param CloseSmartPostDetail $smartPostDetail
     * @return CloseWithDocumentsRequest
     */
    public function setSmartPostDetail($smartPostDetail) {
        return $this->SmartPostDetail = $smartPostDetail;
    }
    
    /**
     * @param CloseDocumentSpecification $closeDocumentSpecification
     * @return CloseWithDocumentsRequest
     */
    public function setCloseDocumentSpecification($closeDocumentSpecification) {
        return $this->CloseDocumentSpecification = $closeDocumentSpecification;
    }

}
