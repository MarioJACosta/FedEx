<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AddressToValidate
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AddressToValidate extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'AddressToValidate';

    /**
     * @param string $clientReferenceId
     * @return AddressToValidate
     */
    public function setClientReferenceId($clientReferenceId) {
        return $this->ClientReferenceId = $clientReferenceId;
    }

    /**
     * @param Contact $contact
     * @return AddressToValidate
     */
    public function setContact($contact) {
        return $this->Contact = $contact;
    }

    /**
     * @param Address $address
     * @return AddressToValidate
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

}
