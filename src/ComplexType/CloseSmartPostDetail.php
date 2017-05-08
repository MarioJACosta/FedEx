<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CloseSmartPostDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CloseSmartPostDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CloseSmartPostDetail';

    /**
     * @param string $hubId
     * @return CloseSmartPostDetail
     */
    public function setHubId($hubId) {
        return $this->HubId = $hubId;
    }

    /**
     * @param string $customerId
     * @return CloseSmartPostDetail
     */
    public function setCustomerId($customerId) {
        return $this->CustomerId = $customerId;
    }

    /**
     * @param string $customerManifestId
     * @return CloseSmartPostDetail
     */
    public function setCustomerManifestId($customerManifestId) {
        return $this->CustomerManifestId = $customerManifestId;
    }

    /**
     * @param string $destinationCountryCode
     * @return CloseSmartPostDetail
     */
    public function setDestinationCountryCode($destinationCountryCode) {
        return $this->DestinationCountryCode = $destinationCountryCode;
    }

    /**
     * @param string $pickupCarrier
     * @return CloseSmartPostDetail
     */
    public function setPickupCarrier($pickupCarrier) {
        return $this->PickupCarrier = $pickupCarrier;
    }
    
    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CloseSmartPostDetail
     */
    public function setCloseSmartPostDetail(array $param) {
        
        $closeSmartPostDetail = new CloseSmartPostDetail();
        $closeSmartPostDetail->setHubId($param[0]);
        $closeSmartPostDetail->setCustomerId($param[1]);
        $closeSmartPostDetail->setCustomerManifestId($param[2]);
        $closeSmartPostDetail->setDestinationCountryCode($param[3]);
        $closeSmartPostDetail->setPickupCarrier($param[4]);
        
        return $closeSmartPostDetail;
        
    }

}
