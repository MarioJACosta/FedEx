<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of GroundCloseRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class GroundCloseRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'GroundCloseRequest';

    /**
     * @param string $closeGrouping
     * @return GroundCloseRequest
     */
    public function setCloseGrouping($closeGrouping) {
        return $this->CloseGrouping = $closeGrouping;
    }

    /**
     * @param Date $timeUpToWhichShipmentsAreToBeClosed
     * @return GroundCloseRequest
     */
    public function setTimeUpToWhichShipmentsAreToBeClosed($timeUpToWhichShipmentsAreToBeClosed) {
        return $this->TimeUpToWhichShipmentsAreToBeClosed = $timeUpToWhichShipmentsAreToBeClosed;
    }
    
    /** 
     * @param CloseManifestReferenceDetail $manifestReferenceDetail
     * @return GroundCloseRequest
     */
    public function setManifestReferenceDetail($manifestReferenceDetail) {
        return $this->ManifestReferenceDetail = $manifestReferenceDetail;
    }

}
