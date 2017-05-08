<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ParsedContactAndAddress
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ParsedContactAndAddress extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ParsedContactAndAddress';

    /**
     * @param ParsedContact $contact
     * @return ParsedContactAndAddress
     */
    public function setContact($contact) {
        return $this->Contact = $contact;
    }

    /**
     * @param ParsedContact $address
     * @return ParsedContactAndAddress
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

}
