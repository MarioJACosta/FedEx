<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ConfirmOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConfirmOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConfirmOpenShipmentRequest';

    /**
     * @param AsynchronousProcessingOptionsRequested $asynchronousProcessingOptions
     * @return ConfirmOpenShipmentRequest
     */
    public function setAsynchronousProcessingOptions($asynchronousProcessingOptions) {
        return $this->AsynchronousProcessingOptions = $asynchronousProcessingOptions;
    }

    /**
     * @param string $index
     * @return ConfirmOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

    /**
     * @param LabelSpecification $labelSpecification
     * @return ConfirmOpenShipmentRequest
     */
    public function setLabelSpecification($labelSpecification) {
        return $this->LabelSpecification = $labelSpecification;
    }

    /**
     * @param ShippingDocumentSpecification $shippingDocumentSpecification
     * @return ConfirmOpenShipmentRequest
     */
    public function setShippingDocumentSpecification($shippingDocumentSpecification) {
        return $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
    }

    /**
     * @param string $rateRequestTypes
     * @return ConfirmOpenShipmentRequest
     */
    public function setRateRequestTypes($rateRequestTypes) {
        return $this->RateRequestTypes = $rateRequestTypes;
    }

    /**
     * @param string $edtRequestType
     * @return ConfirmOpenShipmentRequest
     */
    public function setEdtRequestType($edtRequestType) {
        return $this->EdtRequestType = $edtRequestType;
    }

}
