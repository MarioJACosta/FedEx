<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ParsedPersonName
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ParsedPersonName extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ParsedPersonName';

    /**
     * @param string $prefix
     * @return ParsedPersonName
     */
    public function setPrefix($prefix) {
        return $this->Prefix = $prefix;
    }

    /**
     * @param string $title
     * @return ParsedPersonName
     */
    public function setTitle($title) {
        return $this->Title = $title;
    }

    /**
     * @param string $firstName
     * @return ParsedPersonName
     */
    public function setFirstName($firstName) {
        return $this->FirstName = $firstName;
    }

    /**
     * @param string $middleName
     * @return ParsedPersonName
     */
    public function setMiddleName($middleName) {
        return $this->MiddleName = $middleName;
    }

    /**
     * @param string $lastName
     * @return ParsedPersonName
     */
    public function setLastName($lastName) {
        return $this->LastName = $lastName;
    }

    /**
     * @param string $suffix
     * @return ParsedPersonName
     */
    public function setSuffix($suffix) {
        return $this->Suffix = $suffix;
    }

}
