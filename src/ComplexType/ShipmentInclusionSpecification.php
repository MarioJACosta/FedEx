<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentInclusionSpecification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentInclusionSpecification extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentInclusionSpecification';

    /**
     * @param string $carrierCode
     * @return ShipmentInclusionSpecification
     */
    public function setCarrierCode($carrierCode) {
        return $this->CarrierCode = $carrierCode;
    }

    /**
     * @param string $serviceCategory
     * @return ShipmentInclusionSpecification
     */
    public function setServiceCategory($serviceCategory) {
        return $this->ServiceCategory = $serviceCategory;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ShipmentInclusionSpecification
     */
    public function setShipmentInclusionSpecification(array $param) {

        $shipmentInclusionSpecification = new ShipmentInclusionSpecification();

        $shipmentInclusionSpecification->setCarrierCode($param[0]);
        $shipmentInclusionSpecification->setServiceCategory($param[1]);

        return $shipmentInclusionSpecification;
    }

}
