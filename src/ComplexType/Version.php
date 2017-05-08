<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Version extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Version';

    /**
     * Identifies a system or sub-system which performs an operation.
     * 
     * @param string $serviceId
     */
    public function setServiceId($serviceId) {
        return $this->ServiceId = $serviceId;
    }

    /**
     * Identifies the service business level.
     * 
     * @param string $major
     */
    public function setMajor($major) {
        return $this->Major = $major;
    }

    /**
     * Identifies the service interface level.
     * 
     * @param string $intermediate
     */
    public function setIntermediate($intermediate) {
        return $this->Intermediate = $intermediate;
    }

    /**
     * Identifies the service code level.
     * 
     * @param string $minor
     */
    public function setMinor($minor) {
        return $this->Minor = $minor;
    }

}
