<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ConfirmConsolidationRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConfirmConsolidationRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConfirmConsolidationRequest';

    /**
     * @param AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @return ConfirmConsolidationRequest
     */
    public function setAsynchronousProcessingOptions($asynchronousProcessingOptions) {
        return $this->AsynchronousProcessingOptions = $asynchronousProcessingOptions;
    }

    /**
     * @param ConsolidationKey $consolidationKey
     * @return ConfirmConsolidationRequest
     */
    public function setConsolidationKey($consolidationKey) {
        return $this->ConsolidationKey = $consolidationKey;
    }

    /**
     * @param LabelSpecification $labelSpecification
     * @return ConfirmConsolidationRequest
     */
    public function setLabelSpecification($labelSpecification) {
        return $this->LabelSpecification = $labelSpecification;
    }

    /**
     * @param ShippingDocumentSpecification $shippingDocumentSpecification
     * @return ConfirmConsolidationRequest
     */
    public function setShippingDocumentSpecification($shippingDocumentSpecification) {
        return $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
    }

    /**
     * @param ConsolidationDocumentSpecification $consolidationDocumentSpecification
     * @return ConfirmConsolidationRequest
     */
    public function setConsolidationDocumentSpecification($consolidationDocumentSpecification) {
        return $this->ConsolidationDocumentSpecification = $consolidationDocumentSpecification;
    }

    /**
     * @param string $rateRequestTypes
     * @return ConfirmConsolidationRequest
     */
    public function setRateRequestTypes($rateRequestTypes) {
        return $this->RateRequestTypes = $rateRequestTypes;
    }

    /**
     * @param string $edtRequestType
     * @return ConfirmConsolidationRequest
     */
    public function setEdtRequestType($edtRequestType) {
        return $this->EdtRequestType = $edtRequestType;
    }

}
