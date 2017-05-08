<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SearchLocationConstraints
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SearchLocationConstraints extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SearchLocationConstraints';

    /**
     * @param Distance $radiusDistance
     * @return SearchLocationConstraints
     */
    public function setRadiusDistance($radiusDistance) {
        return $this->RadiusDistance = $radiusDistance;
    }

    /**
     * @param Datetime $expressDropOffTimeNeeded
     * @return SearchLocationConstraints
     */
    public function setExpressDropOffTimeNeeded($expressDropOffTimeNeeded) {
        return $this->ExpressDropOffTimeNeeded = $expressDropOffTimeNeeded;
    }

    /**
     * @param string $resultsFilters
     * @return SearchLocationConstraints
     */
    public function setResultsFilters($resultsFilters) {
        return $this->ResultsFilters = $resultsFilters;
    }

    /**
     * @param string $supportedRedirectToHoldServices
     * @return SearchLocationConstraints
     */
    public function setSupportedRedirectToHoldServices($supportedRedirectToHoldServices) {
        return $this->SupportedRedirectToHoldServices = $supportedRedirectToHoldServices;
    }

    /**
     * @param string $requiredLocationAttributes
     * @return SearchLocationConstraints
     */
    public function setRequiredLocationAttributes($requiredLocationAttributes) {
        return $this->RequiredLocationAttributes = $requiredLocationAttributes;
    }

    /**
     * @param integer $resultsToSkip
     * @return SearchLocationConstraints
     */
    public function setResultsToSkip($resultsToSkip) {
        return $this->ResultsToSkip = $resultsToSkip;
    }

    /**
     * @param integer $resultsRequested
     * @return SearchLocationConstraints
     */
    public function setResultsRequested($resultsRequested) {
        return $this->ResultsRequested = $resultsRequested;
    }

    /**
     * @param string $locationContentOptions
     * @return SearchLocationConstraints
     */
    public function setLocationContentOptions($locationContentOptions) {
        return $this->LocationContentOptions = $locationContentOptions;
    }

    /**
     * @param string $locationTypesToInclude
     * @return SearchLocationConstraints
     */
    public function setLocationTypesToInclude($locationTypesToInclude) {
        return $this->LocationTypesToInclude = $locationTypesToInclude;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\SearchLocationConstraints
     */
    public function setSearchLocationConstraints(array $param) {

        $radiusDistance = new Distance();

        $searchLocationConstraints = new SearchLocationConstraints();
        $searchLocationConstraints->setRadiusDistance($radiusDistance->setDistance(array($param[0], $param[1])));
        $searchLocationConstraints->setExpressDropOffTimeNeeded($param[2]);
        $searchLocationConstraints->setResultsFilters($param[3]);
        $searchLocationConstraints->setSupportedRedirectToHoldServices($param[4]);
        $searchLocationConstraints->setRequiredLocationAttributes($param[5]);
        $searchLocationConstraints->setResultsToSkip($param[6]);
        $searchLocationConstraints->setResultsRequested($param[7]);
        $searchLocationConstraints->setLocationContentOptions($param[8]);
        $searchLocationConstraints->setLocationTypesToInclude($param[9]);

        return $searchLocationConstraints;
    }

}
