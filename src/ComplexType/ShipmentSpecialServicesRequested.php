<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentSpecialServicesRequested extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ShipmentSpecialServicesRequested';

    /**
     * @param string $specialServiceTypes
     * @return ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes($specialServiceTypes) {
        return $this->SpecialServiceTypes = $specialServiceTypes;
    }

    /**
     * @param CodDetail $codDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setCodDetail($codDetail) {
        return $this->CodDetail = $codDetail;
    }

    /**
     * @param DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setDeliveryOnInvoiceAcceptanceDetail($deliveryOnInvoiceAcceptanceDetail) {
        return $this->DeliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
    }

    /**
     * @param HoldAtLocationDetail $holdAtLocationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail($holdAtLocationDetail) {
        return $this->HoldAtLocationDetail = $holdAtLocationDetail;
    }

    /**
     * @param EMailNotificationDetail $eMailNotificationDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEMailNotificationDetail($eMailNotificationDetail) {
        return $this->EMailNotificationDetail = $eMailNotificationDetail;
    }

    /**
     * @param ReturnShipmentDetail $returnShipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail($returnShipmentDetail) {
        return $this->ReturnShipmentDetail = $returnShipmentDetail;
    }

    /**
     * @param PendingShipmentDetail $pendingShipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail($pendingShipmentDetail) {
        return $this->PendingShipmentDetail = $pendingShipmentDetail;
    }

    /**
     * @param InternationalControlledExportDetail $internationalControlledExportDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail($internationalControlledExportDetail) {
        return $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
    }

    /**
     * @param InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setInternationalTrafficInArmsRegulationsDetail($internationalTrafficInArmsRegulationsDetail) {
        return $this->InternationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
    }

    /**
     * @param ShipmentDryIceDetail $shipmentDryIceDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail($shipmentDryIceDetail) {
        return $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
    }

    /**
     * @param HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail($homeDeliveryPremiumDetail) {
        return $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
    }

    /**
     * @param FlatbedTrailerDetail $flatbedTrailerDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setFlatbedTrailerDetail($flatbedTrailerDetail) {
        return $this->FlatbedTrailerDetail = $flatbedTrailerDetail;
    }

    /**
     * @param FreightGuaranteeDetail $freightGuaranteeDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail($freightGuaranteeDetail) {
        return $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
    }

    /**
     * @param EtdDetail $etdDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setEtdDetail($etdDetail) {
        return $this->EtdDetail = $etdDetail;
    }

    /**
     * @param ExtraLaborDetail $extraLaborDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setExtraLaborDetail($extraLaborDetail) {
        return $this->ExtraLaborDetail = $extraLaborDetail;
    }

    /**
     * @param PalletShrinkwrapDetail $palletShrinkwrapDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPalletShrinkwrapDetail($palletShrinkwrapDetail) {
        return $this->PalletShrinkwrapDetail = $palletShrinkwrapDetail;
    }

    /**
     * @param PalletsProvidedDetail $palletsProvidedDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setPalletsProvidedDetail($palletsProvidedDetail) {
        return $this->PalletsProvidedDetail = $palletsProvidedDetail;
    }

    /**
     * @param DetentionDetail $detentionDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setDetentionDetail($detentionDetail) {
        return $this->DetentionDetail = $detentionDetail;
    }

    /**
     * @param MarkingOrTaggingDetail $markingOrTaggingDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setMarkingOrTaggingDetail($markingOrTaggingDetail) {
        return $this->MarkingOrTaggingDetail = $markingOrTaggingDetail;
    }

    /**
     * @param NonBusinessTimeDetail $nonBusinessTimeDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setNonBusinessTimeDetail($nonBusinessTimeDetail) {
        return $this->NonBusinessTimeDetail = $nonBusinessTimeDetail;
    }

    /**
     * @param ShipmentAssemblyDetail $shipmentAssemblyDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setShipmentAssemblyDetail($shipmentAssemblyDetail) {
        return $this->ShipmentAssemblyDetail = $shipmentAssemblyDetail;
    }

    /**
     * @param SortAndSegregateDetail $sortAndSegregateDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setSortAndSegregateDetail($sortAndSegregateDetail) {
        return $this->SortAndSegregateDetail = $sortAndSegregateDetail;
    }

    /**
     * @param SpecialEquipmentDetail $specialEquipmentDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setSpecialEquipmentDetail($specialEquipmentDetail) {
        return $this->SpecialEquipmentDetail = $specialEquipmentDetail;
    }

    /**
     * @param StorageDetail $storageDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setStorageDetail($storageDetail) {
        return $this->StorageDetail = $storageDetail;
    }

    /**
     * @param WeighingDetail $weighingDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setWeighingDetail($weighingDetail) {
        return $this->WeighingDetail = $weighingDetail;
    }

    /**
     * @param CustomDeliveryWindowDetail $customDeliveryWindowDetail
     * @return ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail($customDeliveryWindowDetail) {
        return $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShipmentSpecialServicesRequested
     */
    public function setShipmentSpecialServicesRequested(array $param) {

        $shipmentSpecialServicesRequested = new ShipmentSpecialServicesRequested();
        $shipmentSpecialServicesRequested->setSpecialServiceTypes($param[0]);

        switch ($param[0]) {
            case 'COD':
            case 'COD_REMITTANCE':
                $codDetail = new CodDetail();
                $shipmentSpecialServicesRequested->setCodDetail($codDetail->setCodDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43], $param[44], $param[45], $param[46], $param[47], $param[48], $param[49], $param[50], $param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60], $param[61])));
                break;

            case 'DELIVERY_ON_INVOICE_ACCEPTANCE':
                $deliveryOnInvoiceAcceptanceDetail = new DeliveryOnInvoiceAcceptanceDetail();
                $shipmentSpecialServicesRequested->setDeliveryOnInvoiceAcceptanceDetail($deliveryOnInvoiceAcceptanceDetail->setDeliveryOnInvoiceAcceptanceDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31])));
                break;

            case 'HOLD_AT_LOCATION':
                $holdAtLocationDetail = new HoldAtLocationDetail();
                $shipmentSpecialServicesRequested->setHoldAtLocationDetail($holdAtLocationDetail->setHoldAtLocationDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25])));
                break;

            case 'EMAIL_NOTIFICATION':
                $eMailNotificationDetail = new EMailNotificationDetail();
                $shipmentSpecialServicesRequested->setEMailNotificationDetail($eMailNotificationDetail->setEMailNotificationDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8])));
                break;

            case 'RETURN_SHIPMENT':
                $returnShipmentDetail = new ReturnShipmentDetail();
                $shipmentSpecialServicesRequested->setReturnShipmentDetail($returnShipmentDetail->setReturnShipmentDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6])));
                break;

            case 'PENDING_SHIPMENT':
                $pendingShipmentDetail = new PendingShipmentDetail();
                $shipmentSpecialServicesRequested->setPendingShipmentDetail($pendingShipmentDetail->setPendingShipmentDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6])));
                break;

            case 'INTERNATIONAL_CONTROLLED_EXPORT_SERVICE':
                $internationalControlledExportDetail = new InternationalControlledExportDetail();
                $shipmentSpecialServicesRequested->setInternationalControlledExportDetail($internationalControlledExportDetail->setInternationalControlledExportDetail(array($param[1], $param[2], $param[3], $param[4], $param[5])));
                break;

            case 'INTERNATIONAL_TRAFFIC_IN_ARMS_REGULATIONS':
                $internationalTrafficInArmsRegulationsDetail = new InternationalTrafficInArmsRegulationsDetail();
                $shipmentSpecialServicesRequested->setInternationalTrafficInArmsRegulationsDetail($internationalTrafficInArmsRegulationsDetail->setLicenseOrExemptionNumber($param[1]));
                break;

            case 'DRY_ICE':
                $shipmentDryIceDetail = new ShipmentDryIceDetail();
                $shipmentSpecialServicesRequested->setShipmentDryIceDetail($shipmentDryIceDetail->setShipmentDryIceDetail(array($param[1], $param[2], $param[3])));
                break;

            case 'HOME_DELIVERY_PREMIUM':
                $homeDeliveryPremiumDetail = new HomeDeliveryPremiumDetail();
                $shipmentSpecialServicesRequested->setHomeDeliveryPremiumDetail($homeDeliveryPremiumDetail->setHomeDeliveryPremiumDetail(array($param[1], $param[2], $param[3])));
                break;

            case 'FLATBED_TRAILER':
                $flatbedTrailerDetail = new FlatbedTrailerDetail();
                $shipmentSpecialServicesRequested->setFlatbedTrailerDetail($flatbedTrailerDetail->setOptions($param[1]));
                break;

            case 'FREIGHT_GUARANTEE':
                $freightGuaranteeDetail = new FreightGuaranteeDetail();
                $shipmentSpecialServicesRequested->setFreightGuaranteeDetail($freightGuaranteeDetail->setFreightGuaranteeDetail(array($param[1], $param[2], $param[3])));
                break;

            case 'ELECTRONIC_TRADE_DOCUMENTS':
                $etdDetail = new EtdDetail();
                $shipmentSpecialServicesRequested->setEtdDetail($etdDetail->setEtdDetail(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16])));
                break;


            case 'EXTRA_LABOR':
                $extraLaborDetail = new ExtraLaborDetail();
                $shipmentSpecialServicesRequested->setExtraLaborDetail($extraLaborDetail->setDuration($param[1]));
                break;

            case 'PALLET_SHRINKWRAP':
                $palletShrinkwrapDetail = new PalletShrinkwrapDetail();
                $shipmentSpecialServicesRequested->setPalletShrinkwrapDetail($palletShrinkwrapDetail->setPalletCount($param[1]));
                break;

            case 'PALLETS_PROVIDED':
                $palletsProvidedDetail = new PalletsProvidedDetail();
                $shipmentSpecialServicesRequested->setPalletsProvidedDetail($palletsProvidedDetail->setPalletCount($param[1]));
                break;

            case 'DETENTION':
                $detentionDetail = new DetentionDetail();
                $shipmentSpecialServicesRequested->setDetentionDetail($detentionDetail->setDuration($param[1]));
                break;

            case 'MARKING_OR_TAGGING':
                $markingOrTaggingDetail = new MarkingOrTaggingDetail();
                $shipmentSpecialServicesRequested->setMarkingOrTaggingDetail($markingOrTaggingDetail->setCount($param[1]));
                break;

            case 'NON_BUSINESS_TIME':
                $nonBusinessTimeDetail = new NonBusinessTimeDetail();
                $shipmentSpecialServicesRequested->setNonBusinessTimeDetail($nonBusinessTimeDetail->setNonBusinessTimeDetail(array($param[1], $param[2])));
                break;

            case 'SHIPMENT_ASSEMBLY':
                $shipmentAssemblyDetail = new ShipmentAssemblyDetail();
                $shipmentSpecialServicesRequested->setShipmentAssemblyDetail($shipmentAssemblyDetail->setShipmentAssemblyDetail(array($param[1], $param[2], $param[3])));
                break;
            
            case 'SORT_AND_SEGREGATE':
                $sortAndSegregateDetail = new SortAndSegregateDetail();
                $shipmentSpecialServicesRequested->setSortAndSegregateDetail($sortAndSegregateDetail->setSortAndSegregateDetail(array($param[1], $param[2], $param[3])));
                break;

            case 'SPECIAL_EQUIPMENT':
                $lineItems = new SpecialEquipmentLineItem();
                $lineItems->setSpecialEquipmentLineItem(array($param[1], $param[2]));

                $specialEquipmentDetail = new SpecialEquipmentDetail();
                $specialEquipmentDetail->setLineItems($lineItems);

                $shipmentSpecialServicesRequested->setSpecialEquipmentDetail($specialEquipmentDetail);
                break;

            case 'STORAGE':
                $storageDetail = new StorageDetail();
                $shipmentSpecialServicesRequested->setStorageDetail($storageDetail->setDuration($param[1]));
                break;

            case 'WEIGHING':
                $weighingDetail = new WeighingDetail();
                $shipmentSpecialServicesRequested->setWeighingDetail($weighingDetail->setType($param));
                break;

            case 'CUSTOM_DELIVERY_WINDOW':
                $customDeliveryWindowDetail = new CustomDeliveryWindowDetail();
                $shipmentSpecialServicesRequested->setCustomDeliveryWindowDetail($customDeliveryWindowDetail->setCustomDeliveryWindowDetail(array($param[1], $param[2], $param[3], $param[4], $param[5])));
                break;
        }

        return $shipmentSpecialServicesRequested;
    }

}
