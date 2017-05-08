<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ContactAndAddress
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ContactAndAddress extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ContactAndAddress';

    /**
     * @param Contact $contact
     * @return ContactAndAddress
     */
    public function setContact($contact) {
        return $this->Contact = $contact;
    }

    /**
     * @param Address $address
     * @return ContactAndAddress
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ContactAndAddress
     */
    public function setContactAndAddress(array $param) {

        $address = new Address();
        $contact = new Contact();

        $contactAndAddress = new ContactAndAddress();
        $contactAndAddress->setContact($contact->setContact(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9])));
        $contactAndAddress->setAddress($address->setAddress(array($param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20])));

        return $contactAndAddress;
    }

}
