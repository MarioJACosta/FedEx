<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ParsedContact
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ParsedContact extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ParsedContact';

    /**
     * @param ParsedPersonName $personName
     * @return ParsedContact
     */
    public function setPersonName($personName) {
        return $this->PersonName = $personName;
    }

    /**
     * @param string $title
     * @return ParsedContact
     */
    public function setTitle($title) {
        return $this->Title = $title;
    }

    /**
     * @param string $companyName
     * @return ParsedContact
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }

    /**
     * @param string $phoneNumberCountryCode
     * @return ParsedContact
     */
    public function setPhoneNumberCountryCode($phoneNumberCountryCode) {
        return $this->PhoneNumberCountryCode = $phoneNumberCountryCode;
    }

    /**
     * @param string $phoneNumberAreaCode
     * @return ParsedContact
     */
    public function setPhoneNumberAreaCode($phoneNumberAreaCode) {
        return $this->PhoneNumberAreaCode = $phoneNumberAreaCode;
    }

    /**
     * @param string $phoneNumber
     * @return ParsedContact
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }

    /**
     * @param string $phoneExtension
     * @return ParsedContact
     */
    public function setPhoneExtension($phoneExtension) {
        return $this->PhoneExtension = $phoneExtension;
    }

    /**
     * @param string $pagerNumber
     * @return ParsedContact
     */
    public function setPagerNumber($pagerNumber) {
        return $this->PagerNumber = $pagerNumber;
    }

    /**
     * @param string $faxNumber
     * @return ParsedContact
     */
    public function setFaxNumber($faxNumber) {
        return $this->FaxNumber = $faxNumber;
    }

    /**
     * @param string $eMailAddress
     * @return ParsedContact
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

}
