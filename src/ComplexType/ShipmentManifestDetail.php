<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This identifies which customer reference field contains the manifest ID
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ShipmentManifestDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ShipmentManifestDetail';

    /**
     * @param string $manifestReferenceType
     * @return ShipmentManifestDetail
     */
    public function setManifestReferenceType($manifestReferenceType) {
        return $this->ManifestReferenceType = $manifestReferenceType;
    }

}
