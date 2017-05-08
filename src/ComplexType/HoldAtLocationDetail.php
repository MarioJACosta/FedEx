<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of HoldAtLocationDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class HoldAtLocationDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'HoldAtLocationDetail';

    /**
     * @param string $phoneNumber
     * @return HoldAtLocationDetail
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }

    /**
     * @param ContactAndAddress $locationContactAndAddress
     * @return HoldAtLocationDetail
     */
    public function setLocationContactAndAddress($locationContactAndAddress) {
        return $this->LocationContactAndAddress = $locationContactAndAddress;
    }

    /**
     * @param string $locationType
     * @return HoldAtLocationDetail
     */
    public function setLocationType($locationType) {
        return $this->LocationType = $locationType;
    }

    /**
     * @param string $locationId
     * @return HoldAtLocationDetail
     */
    public function setLocationId($locationId) {
        return $this->LocationId = $locationId;
    }

    /**
     * @param integer $locationNumber
     * @return HoldAtLocationDetail
     */
    public function setLocationNumber($locationNumber) {
        return $this->LocationNumber = $locationNumber;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\HoldAtLocationDetail
     */
    public function setHoldAtLocationDetail(array $param) {

        $contactAndAddress = new ContactAndAddress();

        $holdAtLocationDetail = new HoldAtLocationDetail();
        $holdAtLocationDetail->setPhoneNumber($param[0]);
        $holdAtLocationDetail->setLocationContactAndAddress($contactAndAddress->setContactAndAddress(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21])));
        $holdAtLocationDetail->setLocationType($param[22]);
        $holdAtLocationDetail->setLocationId($param[23]);
        $holdAtLocationDetail->setLocationNumber($param[24]);

        return $holdAtLocationDetail;
    }

}
