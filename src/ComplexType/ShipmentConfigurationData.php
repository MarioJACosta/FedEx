<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ShipmentConfigurationData
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentConfigurationData extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ShipmentConfigurationData';

    /**
     * @param DangerousGoodsDetail $dangerousGoodsPackageConfigurations
     * @return ShipmentConfigurationData
     */
    public function setDangerousGoodsPackageConfigurations($dangerousGoodsPackageConfigurations) {
        return $this->DangerousGoodsPackageConfigurations = $dangerousGoodsPackageConfigurations;
    }
}
