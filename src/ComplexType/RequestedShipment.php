<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The shipment for which a rate quote (or rate-shopping comparison) is desired.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RequestedShipment extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RequestedShipment';

    /**
     * @param DateTime $shipTimestamp
     * @return RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp) {
        return $this->ShipTimestamp = $shipTimestamp;
    }

    /**
     * @param string $dropoffType
     * @return RequestedShipment
     */
    public function setDropoffType($dropoffType) {
        return $this->DropoffType = $dropoffType;
    }

    /**
     * @param service $serviceType
     * @return RequestedShipment
     */
    public function setServiceType($serviceType) {
        return $this->ServiceType = $serviceType;
    }

    /**
     * @param string $packagingType
     * @return RequestedShipment
     */
    public function setPackagingType($packagingType) {
        return $this->PackagingType = $packagingType;
    }

    /**
     * @param ShipmentManifestDetail $manifestDetail
     * @return RequestedShipment
     */
    public function setManifestDetail($manifestDetail) {
        return $this->ManifestDetail = $manifestDetail;
    }

    /**
     * @param ShipmentVariationOptionDetail $variationOptions
     * @return RequestedShipment
     */
    public function setVariationOptions($variationOptions) {
        return $this->VariationOptions = $variationOptions;
    }

    /**
     * @param Weight $totalWeight
     * @return RequestedShipment
     */
    public function setTotalWeight($totalWeight) {
        return $this->TotalWeight = $totalWeight;
    }

    /**
     * @param Money $totalInsuredValue
     * @return RequestedShipment
     */
    public function setTotalInsuredValue($totalInsuredValue) {
        return $this->TotalInsuredValue = $totalInsuredValue;
    }

    /**
     * @param Dimensions $totalDimensions
     * @return RequestedShipment
     */
    public function setTotalDimensions($totalDimensions) {
        return $this->TotalDimensions = $totalDimensions;
    }

    /**
     * @param string $preferredCurrency
     * @return RequestedShipment
     */
    public function setPreferredCurrency($preferredCurrency) {
        return $this->PreferredCurrency = $preferredCurrency;
    }

    /**
     * @param Party $shipper
     * @return RequestedShipment
     */
    public function setShipper($shipper) {
        return $this->Shipper = $shipper;
    }

    /**
     * @param Party $recipient
     * @return RequestedShipment
     */
    public function setRecipient($recipient) {
        return $this->Recipient = $recipient;
    }

    /**
     * @param string $recipientLocationNumber
     * @return RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber) {
        return $this->RecipientLocationNumber = $recipientLocationNumber;
    }

    /**
     * @param ContactAndAddress $origin
     * @return RequestedShipment
     */
    public function setOrigin($origin) {
        return $this->Origin = $origin;
    }

    /**
     * @param Party $soldTo
     * @return RequestedShipment
     */
    public function setSoldTo($soldTo) {
        return $this->SoldTo = $soldTo;
    }

    /**
     * @param Payment $shippingChargesPayment
     * @return RequestedShipment
     */
    public function setShippingChargesPayment($shippingChargesPayment) {
        return $this->ShippingChargesPayment = $shippingChargesPayment;
    }

    /**
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * @return RequestedShipment
     */
    public function setSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param ShipmentProcessingOptionsRequested $processingOptionsRequested
     * @return RequestedShipment
     */
    public function setProcessingOptionsRequested($processingOptionsRequested) {
        return $this->ProcessingOptionsRequested = $processingOptionsRequested;
    }

    /**
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * @return RequestedShipment
     */
    public function setShipmentSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param PackageSpecialServicesRequested $specialServicesRequested
     * @return RequestedShipment
     */
    public function setPackageSpecialServicesRequested($specialServicesRequested) {
        return $this->SpecialServicesRequested = $specialServicesRequested;
    }

    /**
     * @param ExpressFreightDetail $expressFreightDetail
     * @return RequestedShipment
     */
    public function setExpressFreightDetail($expressFreightDetail) {
        return $this->ExpressFreightDetail = $expressFreightDetail;
    }

    /**
     * @param FreightShipmentDetail $freightShipmentDetail
     * @return RequestedShipment
     */
    public function setFreightShipmentDetail($freightShipmentDetail) {
        return $this->FreightShipmentDetail = $freightShipmentDetail;
    }

    /**
     * @param string $deliveryInstructions
     * @return RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions) {
        return $this->DeliveryInstructions = $deliveryInstructions;
    }

    /**
     * @param VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return RequestedShipment
     */
    public function setVariableHandlingChargeDetail($variableHandlingChargeDetail) {
        return $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
    }

    /**
     * @param CustomsClearanceDetail $customsClearanceDetail
     * @return RequestedShipment
     */
    public function setCustomsClearanceDetail($customsClearanceDetail) {
        return $this->CustomsClearanceDetail = $customsClearanceDetail;
    }

    /**
     * @param PickupDetail $pickupDetail
     * @return RequestedShipment
     */
    public function setPickupDetail($pickupDetail) {
        return $this->PickupDetail = $pickupDetail;
    }

    /**
     * @param SmartPostShipmentDetail $smartPostDetail
     * @return RequestedShipment
     */
    public function setSmartPostDetail($smartPostDetail) {
        return $this->SmartPostDetail = $smartPostDetail;
    }

    /**
     * @param boolean $blockInsightVisibility
     * @return RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility) {
        return $this->BlockInsightVisibility = $blockInsightVisibility;
    }

    /**
     * @param LabelSpecification $labelSpecification
     * @return RequestedShipment
     */
    public function setLabelSpecification($labelSpecification) {
        return $this->LabelSpecification = $labelSpecification;
    }

    /**
     * @param ShippingDocumentSpecification $shippingDocumentSpecification
     * @return RequestedShipment
     */
    public function setShippingDocumentSpecification($shippingDocumentSpecification) {
        return $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
    }

    /**
     * @param string $rateRequestTypes
     * @return RequestedShipment
     */
    public function setRateRequestTypes($rateRequestTypes) {
        return $this->RateRequestTypes = $rateRequestTypes;
    }

    /**
     * @param string $edtRequestType
     * @return RequestedShipment
     */
    public function setEdtRequestType($edtRequestType) {
        return $this->EdtRequestType = $edtRequestType;
    }

    /**
     * @param integer $packageCount
     * @return RequestedShipment
     */
    public function setPackageCount($packageCount) {
        return $this->PackageCount = $packageCount;
    }

    /**
     * @param string $shipmentOnlyFields
     * @return RequestedShipment
     */
    public function setShipmentOnlyFields($shipmentOnlyFields) {
        return $this->ShipmentOnlyFields = $shipmentOnlyFields;
    }

    /**
     * @param ShipmentConfigurationData $configurationData
     * @return RequestedShipment
     */
    public function setConfigurationData($configurationData) {
        return $this->ConfigurationData = $configurationData;
    }

    /**
     * @param RequestedPackageLineItems $requestedPackageLineItems
     * @return RequestedShipment
     */
    public function setRequestedPackageLineItems($requestedPackageLineItems) {
        return $this->RequestedPackageLineItems = $requestedPackageLineItems;
    }

    /**
     * @param TrackingId $masterTrackingId
     * @return RequestedShipment
     */
    public function setMasterTrackingId($masterTrackingId) {
        return $this->MasterTrackingId = $masterTrackingId;
    }

    /**
     * @param ShipmentConsolidationDetail $consolidationDetail
     * @return RequestedShipment
     */
    public function setConsolidationDetail($consolidationDetail) {
        return $this->ConsolidationDetail = $consolidationDetail;
    }

}
