<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Party
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Party extends AbstractComplexType {

    protected $_name = 'Party';

    /**
     * @param string $accountNumber
     * @return Party
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }

    /**
     * @param TaxpayerIdentification $tins
     * @return Party
     */
    public function setTins($tins) {
        return $this->Tins = $tins;
    }

    /**
     * @param Contact $contact
     * @return Party
     */
    public function setContact($contact) {
        return $this->Contact = $contact;
    }

    /**
     * @param Address $address
     * @return Party
     */
    public function setAddress($address) {
        return $this->Address = $address;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Party
     */
    public function setParty(array $param) {
        $tins = new TaxpayerIdentification();
        $contact = new Contact();
        $address = new Address();

        $party = new Party();
        $party->setAccountNumber($param[0]);
        $party->setTins($tins->setTaxpayerIdentification(array($param[1], $param[2], $param[3], $param[4], $param[5])));
        $party->setContact($contact->setContact(array($param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15])));
        $party->setAddress($address->setAddress(array($param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26])));
        
        return $party;
    }

}
