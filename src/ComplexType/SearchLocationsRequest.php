<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SearchLocationsRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SearchLocationsRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SearchLocationsRequest';

    /**
     * @param Datetime $effectiveDate
     * @return SearchLocationsRequest
     */
    public function setEffectiveDate($effectiveDate) {
        return $this->EffectiveDate = $effectiveDate;
    }

    /**
     * @param string $locationsSearchCriterion
     * @return SearchLocationsRequest
     */
    public function setLocationsSearchCriterion($locationsSearchCriterion) {
        return $this->LocationsSearchCriterion = $locationsSearchCriterion;
    }

    /**
     * @param UniqueTrackingNumber $uniqueTrackingNumber
     * @return SearchLocationsRequest
     */
    public function setUniqueTrackingNumber($uniqueTrackingNumber) {
        return $this->UniqueTrackingNumber = $uniqueTrackingNumber;
    }

    /**
     * @param Address $address
     * @return SearchLocationsRequest
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * @param string $phoneNumber
     * @return SearchLocationsRequest
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }

    /**
     * @param string $geographicCoordinates
     * @return SearchLocationsRequest
     */
    public function setGeographicCoordinates($geographicCoordinates) {
        return $this->GeographicCoordinates = $geographicCoordinates;
    }

    /**
     * @param string $multipleMatchesAction
     * @return SearchLocationsRequest
     */
    public function setMultipleMatchesAction($multipleMatchesAction) {
        return $this->MultipleMatchesAction = $multipleMatchesAction;
    }

    /**
     * @param LocationSortDetail $sortDetail
     * @return SearchLocationsRequest
     */
    public function setSortDetail($sortDetail) {
        return $this->SortDetail = $sortDetail;
    }

    /**
     * @param SearchLocationConstraints $constraints
     * @return SearchLocationsRequest
     */
    public function setConstraints($constraints) {
        return $this->Constraints = $constraints;
    }

}
