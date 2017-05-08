<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TransactionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TransactionDetail extends AbstractComplexType {

    protected $_name = 'TransactionDetail';

    /**
     * @param string $customerTransactionId
     * @return TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId) {
        return $this->CustomerTransactionId = $customerTransactionId;
    }

    /**
     * @param Localization $localization
     * @return TransactionDetail
     */
    public function setLocalization($localization) {
        return $this->Localization = $localization;
    }

}
