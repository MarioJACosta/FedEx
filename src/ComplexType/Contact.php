<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a point-of-contact person
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Contact extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Contact';

    /**
     * @param string $contactId
     * @return Contact
     */
    public function setContactId($contactId) {
        return $this->ContactId = $contactId;
    }

    /**
     * @param string $personName
     * @return Contact
     */
    public function setPersonName($personName) {
        return $this->PersonName = $personName;
    }

    /**
     * @param string $title
     * @return Contact
     */
    public function setTitle($title) {
        return $this->Title = $title;
    }

    /**
     * @param string $companyName
     * @return Contact
     */
    public function setCompanyName($companyName) {
        return $this->CompanyName = $companyName;
    }

    /**
     * @param string $phoneNumber
     * @return Contact
     */
    public function setPhoneNumber($phoneNumber) {
        return $this->PhoneNumber = $phoneNumber;
    }

    /**
     * @param string $phoneExtension
     * @return Contact
     */
    public function setPhoneExtension($phoneExtension) {
        return $this->PhoneExtension = $phoneExtension;
    }

    /**
     * @param string $tollFreePhoneNumber
     * @return Contact
     */
    public function setTollFreePhoneNumber($tollFreePhoneNumber) {
        return $this->TollFreePhoneNumber = $tollFreePhoneNumber;
    }

    /**
     * @param string $pagerNumber
     * @return Contact
     */
    public function setPagerNumber($pagerNumber) {
        return $this->PagerNumber = $pagerNumber;
    }

    /**
     * @param string $faxNumber
     * @return Contact
     */
    public function setFaxNumber($faxNumber) {
        return $this->FaxNumber = $faxNumber;
    }

    /**
     * @param string $eMailAddress
     * @return Contact
     */
    public function setEMailAddress($eMailAddress) {
        return $this->EMailAddress = $eMailAddress;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Contact
     */
    public function setContact(array $param) {

        $contact = new Contact();
        $contact->setContactId($param[0]);
        $contact->setPersonName($param[1]);
        $contact->setTitle($param[2]);
        $contact->setCompanyName($param[3]);
        $contact->setPhoneNumber($param[4]);
        $contact->setPhoneExtension($param[5]);
        $contact->setTollFreePhoneNumber($param[6]);
        $contact->setPagerNumber($param[7]);
        $contact->setFaxNumber($param[8]);
        $contact->setEMailAddress($param[9]);

        return $contact;
    }

}
