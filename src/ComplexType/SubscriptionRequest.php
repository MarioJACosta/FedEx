<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of SubscriptionRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class SubscriptionRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'SubscriptionRequest';

    /**
     * @param string $cspSolutionId
     * @return SubscriptionRequest
     */
    public function setCspSolutionId($cspSolutionId) {
        return $this->CspSolutionId = $cspSolutionId;
    }

    /**
     * @param string $cspType
     * @return SubscriptionRequest
     */
    public function setCspType($cspType) {
        return $this->CspType = $cspType;
    }

    /**
     * @param Party $subscriber
     * @return SubscriptionRequest
     */
    public function setSubscriber($subscriber) {
        return $this->Subscriber = $subscriber;
    }

    /**
     * @param Address $accountShippingAddress
     * @return SubscriptionRequest
     */
    public function setAccountShippingAddress($accountShippingAddress) {
        return $this->AccountShippingAddress = $accountShippingAddress;
    }

}
