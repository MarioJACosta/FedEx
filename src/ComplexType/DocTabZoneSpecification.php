<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DocTabZoneSpecification
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DocTabZoneSpecification extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'DocTabZoneSpecification';

    /**
     * @param integer $zoneNumber
     * @return DocTabZoneSpecification
     */
    public function setZoneNumber($zoneNumber) {
        return $this->ZoneNumber = $zoneNumber;
    }

    /**
     * @param string $header
     * @return DocTabZoneSpecification
     */
    public function setHeader($header) {
        return $this->Header = $header;
    }

    /**
     * @param string $dataField
     * @return DocTabZoneSpecification
     */
    public function setDataField($dataField) {
        return $this->DataField = $dataField;
    }

    /**
     * @param string $literalValue
     * @return DocTabZoneSpecification
     */
    public function setLiteralValue($literalValue) {
        return $this->LiteralValue = $literalValue;
    }

    /**
     * @param string $justification
     * @return DocTabZoneSpecification
     */
    public function setJustification($justification) {
        return $this->Justification = $justification;
    }

    public function setDocTabZoneSpecification($param) {

        $docTabZoneSpecifications = new DocTabZoneSpecification();
        $docTabZoneSpecifications->setZoneNumber($param[0]);
        $docTabZoneSpecifications->setHeader($param[1]);
        $docTabZoneSpecifications->setDataField($param[2]);
        $docTabZoneSpecifications->setLiteralValue($param[3]);
        $docTabZoneSpecifications->setJustification($param[4]);

        return $docTabZoneSpecifications;
    }

}
