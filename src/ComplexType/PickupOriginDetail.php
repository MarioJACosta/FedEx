<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PickupOriginDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupOriginDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PickupOriginDetail';

    /**
     * @param boolean $useAccountAddress
     * @return PickupOriginDetail
     */
    public function setUseAccountAddress($useAccountAddress) {
        return $this->UseAccountAddress = $useAccountAddress;
    }

    /**
     * @param string $addressId
     * @return PickupOriginDetail
     */
    public function setAddressId($addressId) {
        return $this->AddressId = $addressId;
    }

    /**
     * @param ContactAndAddress $pickupLocation
     * @return PickupOriginDetail
     */
    public function setPickupLocation($pickupLocation) {
        return $this->PickupLocation = $pickupLocation;
    }

    /**
     * @param string $packageLocation
     * @return PickupOriginDetail
     */
    public function setPackageLocation($packageLocation) {
        return $this->PackageLocation = $packageLocation;
    }

    /**
     * @param string $buildingPart
     * @return PickupOriginDetail
     */
    public function setBuildingPart($buildingPart) {
        return $this->BuildingPart = $buildingPart;
    }

    /**
     * @param string $buildingPartDescription
     * @return PickupOriginDetail
     */
    public function setBuildingPartDescription($buildingPartDescription) {
        return $this->BuildingPartDescription = $buildingPartDescription;
    }

    /**
     * @param Datetime $readyTimestamp
     * @return PickupOriginDetail
     */
    public function setReadyTimestamp($readyTimestamp) {
        return $this->ReadyTimestamp = $readyTimestamp;
    }

    /**
     * @param Datetime $companyCloseTime
     * @return PickupOriginDetail
     */
    public function setCompanyCloseTime($companyCloseTime) {
        return $this->CompanyCloseTime = $companyCloseTime;
    }

    /**
     * @param boolean $stayLate
     * @return PickupOriginDetail
     */
    public function setStayLate($stayLate) {
        return $this->StayLate = $stayLate;
    }

    /**
     * @param string $pickupDateType
     * @return PickupOriginDetail
     */
    public function setPickupDateType($pickupDateType) {
        return $this->PickupDateType = $pickupDateType;
    }

    /**
     * @param Datetime $lastAccessTime
     * @return PickupOriginDetail
     */
    public function setLastAccessTime($lastAccessTime) {
        return $this->LastAccessTime = $lastAccessTime;
    }

    /**
     * @param string $geographicalPostalCode
     * @return PickupOriginDetail
     */
    public function setGeographicalPostalCode($geographicalPostalCode) {
        return $this->GeographicalPostalCode = $geographicalPostalCode;
    }

    /**
     * @param string $location
     * @return PickupOriginDetail
     */
    public function setLocation($location) {
        return $this->Location = $location;
    }

    /**
     * @param boolean $deleteLastUsed
     * @return PickupOriginDetail
     */
    public function setDeleteLastUsed($deleteLastUsed) {
        return $this->DeleteLastUsed = $deleteLastUsed;
    }

    /**
     * @param string $suppliesRequested
     * @return PickupOriginDetail
     */
    public function setSuppliesRequested($suppliesRequested) {
        return $this->SuppliesRequested = $suppliesRequested;
    }

    /**
     * @param boolean $earlyPickup
     * @return PickupOriginDetail
     */
    public function setEarlyPickup($earlyPickup) {
        return $this->EarlyPickup = $earlyPickup;
    }

}
