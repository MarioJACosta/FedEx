<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of VersionCaptureRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class VersionCaptureRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'VersionCaptureRequest';

    /**
     * @param string $originLocationId
     * @return VersionCaptureRequest
     */
    public function setOriginLocationId($originLocationId) {
        return $this->OriginLocationId = $originLocationId;
    }

    /**
     * @param string $vendorProductPlatform
     * @return VersionCaptureRequest
     */
    public function setVendorProductPlatform($vendorProductPlatform) {
        return $this->VendorProductPlatform = $vendorProductPlatform;
    }

}
