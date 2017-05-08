<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RegisterWebUserRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RegisterWebUserRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RegisterWebUserRequest';

    /**
     * @param WebAuthenticationCredential $parentCredential
     * @return RegisterWebUserRequest
     */
    public function setParentCredential($parentCredential) {
        return $this->ParentCredential = $parentCredential;
    }

    /**
     * @param string $categories
     * @return RegisterWebUserRequest
     */
    public function setCategories($categories) {
        return $this->Categories = $categories;
    }

    /**
     * @param Address $shippingAddress
     * @return RegisterWebUserRequest
     */
    public function setShippingAddress($shippingAddress) {
        return $this->ShippingAddress = $shippingAddress;
    }

    /**
     * @param ParsedContactAndAddress $userContactAndAddress
     * @return RegisterWebUserRequest
     */
    public function setUserContactAndAddress($userContactAndAddress) {
        return $this->UserContactAndAddress = $userContactAndAddress;
    }

    /**
     * @param string $secondaryEmail
     * @return RegisterWebUserRequest
     */
    public function setSecondaryEmail($secondaryEmail) {
        return $this->SecondaryEmail = $secondaryEmail;
    }

}
