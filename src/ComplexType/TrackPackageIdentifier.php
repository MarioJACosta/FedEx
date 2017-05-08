<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of TrackPackageIdentifier
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class TrackPackageIdentifier extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'TrackPackageIdentifier';

    /**
     * @param string $type
     * @return TrackPackageIdentifier
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $value
     * @return TrackPackageIdentifier
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\TrackPackageIdentifier
     */
    public function setTrackPackageIdentifier(array $param) {

        $trackPackageIdentifier = new TrackPackageIdentifier();
        $trackPackageIdentifier->setType($param[0]);
        $trackPackageIdentifier->setValue($param[1]);

        return $trackPackageIdentifier;
    }

}
