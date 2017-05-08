<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomerImageUsage
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomerImageUsage extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomerImageUsage';

    /**
     * @param string $type
     * @return CustomerImageUsage
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $id
     * @return CustomerImageUsage
     */
    public function setId($id) {
        return $this->Id = $id;
    }

    /**
     * @param string $internalId
     * @return CustomerImageUsage
     */
    public function setInternalId($internalId) {
        return $this->InternalId = $internalId;
    }

    /**
     * @param string $internalImageType
     * @return CustomerImageUsage
     */
    public function setInternalImageType($internalImageType) {
        return $this->InternalImageType = $internalImageType;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomerImageUsage
     */
    public function setCustomerImageUsage(array $param) {

        $customerImageUsage = new CustomerImageUsage();
        $customerImageUsage->setType($param[0]);
        $customerImageUsage->setId($param[1]);
        $customerImageUsage->setInternalId($param[2]);
        $customerImageUsage->setInternalImageType($param[3]);

        return $customerImageUsage;
    }

}
