<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DangerousGoodsDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DangerousGoodsDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DangerousGoodsDetail';

    /**
     * @param string $regulation
     * @return DangerousGoodsDetail
     */
    public function setRegulation($regulation) {
        return $this->Regulation = $regulation;
    }

    /**
     * @param string $accessibility
     * @return DangerousGoodsDetail
     */
    public function setAccessibility($accessibility) {
        return $this->Accessibility = $accessibility;
    }

    /**
     * @param boolean $cargoAircraftOnly
     * @return DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly) {
        return $this->CargoAircraftOnly = $cargoAircraftOnly;
    }

    /**
     * @param string $options
     * @return DangerousGoodsDetail
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

    /**
     * @param string $packingOption
     * @return DangerousGoodsDetail
     */
    public function setPackingOption($packingOption) {
        return $this->PackingOption = $packingOption;
    }

    /**
     * @param string $referenceId
     * @return DangerousGoodsDetail
     */
    public function setReferenceId($referenceId) {
        return $this->ReferenceId = $referenceId;
    }

    /**
     * @param DangerousGoodsContainer $containers
     * @return DangerousGoodsDetail
     */
    public function setContainers($containers) {
        return $this->Containers = $containers;
    }

    /**
     * @param HazardousCommodityPackagingDetail $packaging
     * @return DangerousGoodsDetail
     */
    public function setPackaging($packaging) {
        return $this->Packaging = $packaging;
    }

    /**
     * @param DangerousGoodsSignatory $signatory
     * @return DangerousGoodsDetail
     */
    public function setSignatory($signatory) {
        return $this->Signatory = $signatory;
    }

    /**
     * @param string $emergencyContactNumber
     * @return DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber) {
        return $this->EmergencyContactNumber = $emergencyContactNumber;
    }

    /**
     * @param string $offeror
     * @return DangerousGoodsDetail
     */
    public function setOfferor($offeror) {
        return $this->Offeror = $offeror;
    }

    /**
     * @param Contact $infectiousSubstanceResponsibleContact
     * @return DangerousGoodsDetail
     */
    public function setInfectiousSubstanceResponsibleContact($infectiousSubstanceResponsibleContact) {
        return $this->InfectiousSubstanceResponsibleContact = $infectiousSubstanceResponsibleContact;
    }

    /**
     * @param string $additionalHandling
     * @return DangerousGoodsDetail
     */
    public function setAdditionalHandling($additionalHandling) {
        return $this->AdditionalHandling = $additionalHandling;
    }

    /**
     * @param RadioactivityDetail $radioactivityDetail
     * @return DangerousGoodsDetail
     */
    public function setRadioactivityDetail($radioactivityDetail) {
        return $this->RadioactivityDetail = $radioactivityDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DangerousGoodsDetail
     */
    public function setDangerousGoodsDetail(array $param) {

        $containers = new DangerousGoodsContainer();
        $packaging = new HazardousCommodityPackagingDetail();
        $signatory = new DangerousGoodsSignatory();
        $contact = new Contact();
        $radioactivityDetail = new RadioactivityDetail();

        $dangerousGoodsDetail = new DangerousGoodsDetail();
        $dangerousGoodsDetail->setRegulation($param[0]);
        $dangerousGoodsDetail->setAccessibility($param[1]);
        $dangerousGoodsDetail->setCargoAircraftOnly($param[2]);
        $dangerousGoodsDetail->setOptions($param[3]);
        $dangerousGoodsDetail->setPackingOption($param[4]);
        $dangerousGoodsDetail->setReferenceId($param[5]);
        $dangerousGoodsDetail->setContainers($containers->setDangerousGoodsContainer(array($param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28], $param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35], $param[36], $param[37], $param[38], $param[39], $param[40], $param[41], $param[42], $param[43])));
        $dangerousGoodsDetail->setPackaging($packaging->setHazardousCommodityPackagingDetail(array($param[44], $param[45])));
        $dangerousGoodsDetail->setSignatory($signatory->setDangerousGoodsSignatory(array($param[46], $param[47], $param[48])));
        $dangerousGoodsDetail->setEmergencyContactNumber($param[49]);
        $dangerousGoodsDetail->setOfferor($param[50]);
        $dangerousGoodsDetail->setInfectiousSubstanceResponsibleContact($contact->setContact(array($param[51], $param[52], $param[53], $param[54], $param[55], $param[56], $param[57], $param[58], $param[59], $param[60])));
        $dangerousGoodsDetail->setAdditionalHandling($param[61]);
        $dangerousGoodsDetail->setRadioactivityDetail($radioactivityDetail->setRadioactivityDetail(array($param[62], $param[63], $param[64], $param[65], $param[66], $param[67], $param[68])));

        return $dangerousGoodsDetail;
    }

}
