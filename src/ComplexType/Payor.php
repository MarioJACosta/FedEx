<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of Payor
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Payor extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Payor';

    /**
     * @param Party $responsibleParty
     * @return Payor
     */
    public function setResponsibleParty($responsibleParty) {
        return $this->ResponsibleParty = $responsibleParty;
    }

    /**
     * @param AssociatedAccount $associatedAccounts
     * @return Payor
     */
    public function setAssociatedAccounts($associatedAccounts) {
        return $this->AssociatedAccounts = $associatedAccounts;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\Payor
     */
    public function setPayor(array $param) {
        $payor = new Payor();
        $party = new Party();
        $associatedAccount = new AssociatedAccount();

        $payor->setResponsibleParty($party->setParty(array($param[0], $param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8], $param[9], $param[10], $param[11], $param[12], $param[13], $param[14], $param[15], $param[16], $param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26])));
        $payor->setAssociatedAccounts($associatedAccount->setAssociatedAccount(array($param[27], $param[28])));

        return $payor;
    }

}
