<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AssociatedAccount
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AssociatedAccount extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AssociatedAccount';

    /**
     * @param string $type
     * @return AssociatedAccount
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $accountNumber
     * @return AssociatedAccount
     */
    public function setAccountNumber($accountNumber) {
        return $this->AccountNumber = $accountNumber;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\AssociatedAccount
     */
    public function setAssociatedAccount(array $param) {
        $associatedAccount = new AssociatedAccount();

        $associatedAccount->setType($param[0]);
        $associatedAccount->setAccountNumber($param[1]);

        return $associatedAccount;
    }

}
