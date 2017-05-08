<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConfigurableLabelReferenceEntry extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConfigurableLabelReferenceEntry';

    /**
     * @param integer $ZoneNumber
     * @return ConfigurableLabelReferenceEntry
     */
    public function setZoneNumber($ZoneNumber) {
        return $this->ZoneNumber = $ZoneNumber;
    }

    /**
     * @param string $header
     * @return ConfigurableLabelReferenceEntry
     */
    public function setHeader($header) {
        return $this->Header = $header;
    }

    /**
     * @param string $dataField
     * @return ConfigurableLabelReferenceEntry
     */
    public function setDataField($dataField) {
        return $this->DataField = $dataField;
    }

    /**
     * @param string $literalValue
     * @return ConfigurableLabelReferenceEntry
     */
    public function setLiteralValue($literalValue) {
        return $this->LiteralValue = $literalValue;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ConfigurableLabelReferenceEntry
     */
    public function setConfigurableLabelReferenceEntry(array $param) {

        $configurableLabelReferenceEntry = new ConfigurableLabelReferenceEntry();

        $configurableLabelReferenceEntry->setZoneNumber($param[0]);
        $configurableLabelReferenceEntry->setHeader($param[1]);
        $configurableLabelReferenceEntry->setDataField($param[2]);
        $configurableLabelReferenceEntry->setLiteralValue($param[3]);

        return $configurableLabelReferenceEntry;
    }

}
