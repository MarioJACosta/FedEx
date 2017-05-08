<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CreatePickupRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CreatePickupRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CreatePickupRequest';

    /**
     * @param AssociatedAccount $associatedAccountNumber
     * @return CreatePickupRequest
     */
    public function setAssociatedAccountNumber($associatedAccountNumber) {
        return $this->AssociatedAccountNumber = $associatedAccountNumber;
    }

    /**
     * @param string $trackingNumber
     * @return CreatePickupRequest
     */
    public function setTrackingNumber($trackingNumber) {
        return $this->TrackingNumber = $trackingNumber;
    }

    /**
     * @param PickupOriginDetail $originDetail
     * @return CreatePickupRequest
     */
    public function setOriginDetail($originDetail) {
        return $this->OriginDetail = $originDetail;
    }

    /**
     * @param string $pickupServiceCategory
     * @return CreatePickupRequest
     */
    public function setPickupServiceCategory($pickupServiceCategory) {
        return $this->PickupServiceCategory = $pickupServiceCategory;
    }

    /**
     * @param FreightPickupDetail $freightPickupDetail
     * @return CreatePickupRequest
     */
    public function setFreightPickupDetail($freightPickupDetail) {
        return $this->FreightPickupDetail = $freightPickupDetail;
    }

    /**
     * @param ExpressFreightPickupDetail $expressFreightDetail
     * @return CreatePickupRequest
     */
    public function setExpressFreightDetail($expressFreightDetail) {
        return $this->ExpressFreightDetail = $expressFreightDetail;
    }

    /**
     * @param integer $packageCount
     * @return CreatePickupRequest
     */
    public function setPackageCount($packageCount) {
        return $this->PackageCount = $packageCount;
    }

    /**
     * @param Weight $totalWeight
     * @return CreatePickupRequest
     */
    public function setTotalWeight($totalWeight) {
        return $this->TotalWeight = $totalWeight;
    }

    /**
     * @param string $carrierCode
     * @return CreatePickupRequest
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

    /**
     * @param integer $oversizePackageCount
     * @return CreatePickupRequest
     */
    public function setOversizePackageCount($oversizePackageCount) {
        return $this->OversizePackageCount = $oversizePackageCount;
    }

    /**
     * @param string $remarks
     * @return CreatePickupRequest
     */
    public function setRemarks($remarks) {
        return $this->Remarks = $remarks;
    }

    /**
     * @param string $commodityDescription
     * @return CreatePickupRequest
     */
    public function setCommodityDescription($commodityDescription) {
        return $this->CommodityDescription = $commodityDescription;
    }

    /**
     * @param string $countryRelationship
     * @return CreatePickupRequest
     */
    public function setCountryRelationship($countryRelationship) {
        return $this->CountryRelationship = $countryRelationship;
    }

}
