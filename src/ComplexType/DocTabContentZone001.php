<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DocTabContentZone001
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DocTabContentZone001 extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DocTabContentZone001';

    /**
     * @param DocTabZoneSpecification $docTabZoneSpecifications
     * @return DocTabContentZone001
     */
    public function setDocTabZoneSpecifications($docTabZoneSpecifications) {
        return $this->DocTabZoneSpecifications = $docTabZoneSpecifications;
    }

}
