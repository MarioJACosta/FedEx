<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of UploadedDangerousGoodsShipmentDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class UploadedDangerousGoodsShipmentDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'UploadedDangerousGoodsShipmentDetail';

    /**
     * @param string $attributes
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setAttributes($attributes) {
        return $this->Attributes = $attributes;
    }

    /**
     * @param Address $origin
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setOrigin($origin) {
        return $this->Origin = $origin;
    }

    /**
     * @param Address $destination
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setDestination($destination) {
        return $this->Destination = $destination;
    }

    /**
     * @param string $carrierCode
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

    /**
     * @param string $serviceType
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setServiceType($serviceType) {
        return $this->ServiceType = $serviceType;
    }

    /**
     * @param Datetime $shipDate
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setShipDate(Date $shipDate) {
        return $this->ShipDate = $shipDate;
    }

    /**
     * @param string $offeror
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setOfferor($offeror) {
        return $this->Offeror = $offeror;
    }

    /**
     * @param DangerousGoodsSignatory $signatory
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setSignatory($signatory) {
        return $this->Signatory = $signatory;
    }

    /**
     * @param Contact $infectiousSubstanceResponsibleContact
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setInfectiousSubstanceResponsibleContact($infectiousSubstanceResponsibleContact) {
        return $this->InfectiousSubstanceResponsibleContact = $infectiousSubstanceResponsibleContact;
    }

    /**
     * @param string $emergencyContactNumber
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber) {
        return $this->EmergencyContactNumber = $emergencyContactNumber;
    }

    /**
     * @param string $aircraftCategoryType
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setAircraftCategoryType($aircraftCategoryType) {
        return $this->AircraftCategoryType = $aircraftCategoryType;
    }

    /**
     * @param string $additionalHandling
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setAdditionalHandling($additionalHandling) {
        return $this->AdditionalHandling = $additionalHandling;
    }

    /**
     * @param TrackingId $masterTrackingId
     * @return UploadedDangerousGoodsShipmentDetail
     */
    public function setMasterTrackingId($masterTrackingId) {
        return $this->MasterTrackingId = $masterTrackingId;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\UploadedDangerousGoodsShipmentDetail
     */
    public function setUploadedDangerousGoodsShipmentDetail(array $param) {

        $address = new Address();
        $signatory = new DangerousGoodsSignatory();
        $contact = new Contact();
        $masterTrackingId = new TrackingId();

        $uploadedDangerousGoodsShipmentDetail = new UploadedDangerousGoodsShipmentDetail();
        $uploadedDangerousGoodsShipmentDetail->setAttributes('MANUAL_SHIPPING_LABEL');
        $uploadedDangerousGoodsShipmentDetail->setOrigin($address->setAddress(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11])));
        $uploadedDangerousGoodsShipmentDetail->setDestination($address->setAddress(array($param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22])));
        $uploadedDangerousGoodsShipmentDetail->setCarrierCode($param[23]);
        $uploadedDangerousGoodsShipmentDetail->setServiceType($param[24]);
        $uploadedDangerousGoodsShipmentDetail->setShipDate($param[25]);
        $uploadedDangerousGoodsShipmentDetail->setOfferor($param[26]);
        $uploadedDangerousGoodsShipmentDetail->setSignatory($signatory->setDangerousGoodsSignatory(array($param[27], $param[28], $param[29])));
        $uploadedDangerousGoodsShipmentDetail->setInfectiousSubstanceResponsibleContact($contact->setContact(array($param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39])));
        $uploadedDangerousGoodsShipmentDetail->setEmergencyContactNumber($param[40]);
        $uploadedDangerousGoodsShipmentDetail->setAircraftCategoryType($param[41]);
        $uploadedDangerousGoodsShipmentDetail->setAdditionalHandling($param[42]);
        $uploadedDangerousGoodsShipmentDetail->setMasterTrackingId($masterTrackingId->setTrackingId(array($param[43], $param[44], $param[45], $param[46])));

        return $uploadedDangerousGoodsShipmentDetail;
    }

}
