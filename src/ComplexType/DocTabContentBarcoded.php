<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DocTabContentBarcoded
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DocTabContentBarcoded extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DocTabContentBarcoded';

    /**
     * @param string $symbology
     * @return DocTabContentBarcoded
     */
    public function setSymbology($symbology) {
        return $this->Symbology = $symbology;
    }

    /**
     * @param DocTabZoneSpecification $specification
     * @return DocTabContentBarcoded
     */
    public function setSpecification($specification) {
        return $this->Specification = $specification;
    }

}
