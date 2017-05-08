<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomerReference
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomerReference extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CustomerReference';

    /**
     * @param string $customerReferenceType
     * @return CustomerReference
     */
    public function setCustomerReferenceType($customerReferenceType) {
        return $this->CustomerReferenceType = $customerReferenceType;
    }

    /**
     * @param string $value
     * @return CustomerReference
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomerReference
     */
    public function setCustomerReference(array $param) {

        $customerReference = new CustomerReference();

        $customerReference->setCustomerReferenceType($param[0]);
        $customerReference->setValue($param[1]);

        return $customerReference;
    }

}
