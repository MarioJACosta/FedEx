<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AddPackagesToOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AddPackagesToOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AddPackagesToOpenShipmentRequest';

    /**
     * @param string $index
     * @return AddPackagesToOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

    /**
     * @param string $actions
     * @return AddPackagesToOpenShipmentRequest
     */
    public function setActions($actions) {
        return $this->Actions = $actions;
    }

    /**
     * @param RequestedPackageLineItem $requestedPackageLineItems
     * @return AddPackagesToOpenShipmentRequest
     */
    public function setRequestedPackageLineItems($requestedPackageLineItems) {
        return $this->RequestedPackageLineItems = $requestedPackageLineItems;
    }

}
