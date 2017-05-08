<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HomeDeliveryPremiumDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HomeDeliveryPremiumDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HomeDeliveryPremiumDetail';

    /**
     * @param string $homeDeliveryPremiumType
     * @return HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType($homeDeliveryPremiumType) {
        return $this->HomeDeliveryPremiumType = $homeDeliveryPremiumType;
    }

    /**
     * @param Datetime $date
     * @return HomeDeliveryPremiumDetail
     */
    public function setDate($date) {
        return $this->Date = $date;
    }

    /**
     * @param string $phoneNumber
     * @return HomeDeliveryPremiumDetail
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumDetail(array $param) {
        $homeDeliveryPremiumDetail = new HomeDeliveryPremiumDetail();
        $homeDeliveryPremiumDetail->setHomeDeliveryPremiumType($param[0]);
        $homeDeliveryPremiumDetail->setDate($param[1]);
        $homeDeliveryPremiumDetail->setPhoneNumber($param[2]);

        return $homeDeliveryPremiumDetail;
    }

}
