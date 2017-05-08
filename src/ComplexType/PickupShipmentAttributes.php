<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PickupShipmentAttributes
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PickupShipmentAttributes extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PickupShipmentAttributes';

    /**
     * @param string $serviceType
     * @return PickupShipmentAttributes
     */
    public function setServiceType($serviceType) {
        return $this->ServiceType = $serviceType;
    }

    /**
     * @param string $packagingType
     * @return PickupShipmentAttributes
     */
    public function setPackagingType($packagingType) {
        return $this->PackagingType = $packagingType;
    }

    /**
     * @param Dimensions $dimensions
     * @return PickupShipmentAttributes
     */
    public function setDimensions($dimensions) {
        return $this->Dimensions = $dimensions;
    }

    /**
     * @param Weight $weight
     * @return PickupShipmentAttributes
     */
    public function setWeight($weight) {
        return $this->Weight = $weight;
    }
}
