<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SmartPostCloseRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SmartPostCloseRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SmartPostCloseRequest';

    /**
     * @param string $hubId
     * @return SmartPostCloseRequest
     */
    public function setHubId($hubId) {
        return $this->HubId = $hubId;
    }
    
    /**
     * @param string $smartPostCustomerId
     * @return SmartPostCloseRequest
     */
    public function setsmartPostCustomerId($smartPostCustomerId) {
        return $this->smartPostCustomerId = $smartPostCustomerId;
    }

    /**
     * @param string $customerManifestId
     * @return SmartPostCloseRequest
     */
    public function setCustomerManifestId($customerManifestId) {
        return $this->CustomerManifestId = $customerManifestId;
    }

    /**
     * @param string $destinationCountryCode
     * @return SmartPostCloseRequest
     */
    public function setDestinationCountryCode($destinationCountryCode) {
        return $this->DestinationCountryCode = $destinationCountryCode;
    }

    /**
     * @param string $pickUpCarrier
     * @return SmartPostCloseRequest
     */
    public function setPickUpCarrier($pickUpCarrier) {
        return $this->PickUpCarrier = $pickUpCarrier;
    }

    /**
     * @param CloseManifestReferenceDetail $manifestReferenceDetail
     * @return SmartPostCloseRequest
     */
    public function setManifestReferenceDetail($manifestReferenceDetail) {
        return $this->ManifestReferenceDetail = $manifestReferenceDetail;
    }

}
