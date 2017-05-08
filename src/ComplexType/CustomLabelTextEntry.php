<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomLabelTextEntry extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CustomLabelTextEntry';

    /**
     * @param CustomLabelPosition $position
     * @return CustomLabelTextEntry
     */
    public function setPosition($position) {
        return $this->Position = $position;
    }

    /**
     * @param string $format
     * @return CustomLabelTextEntry
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param string $dataFields
     * @return CustomLabelTextEntry
     */
    public function setDataFields($dataFields) {
        return $this->DataFields = $dataFields;
    }

    /**
     * @param string $ThermalFontId
     * @return CustomLabelTextEntry
     */
    public function setThermalFontId($ThermalFontId) {
        return $this->ThermalFontId = $ThermalFontId;
    }

    /**
     * @param string $fontName
     * @return CustomLabelTextEntry
     */
    public function setFontName($fontName) {
        return $this->FontName = $fontName;
    }

    /**
     * @param integer $fontSize
     * @return CustomLabelTextEntry
     */
    public function setFontSize($fontSize) {
        return $this->FontSize = $fontSize;
    }

    /**
     * @param string $rotation
     * @return CustomLabelTextEntry
     */
    public function setRotation($rotation) {
        return $this->Rotation = $rotation;
    }

    public function setCustomLabelTextEntry($param) {

        $position = new CustomLabelPosition();
        $position->setCustomLabelPosition(array($param[0], $param[1]));

        $customLabelTextEntry = new CustomLabelTextEntry();
        $customLabelTextEntry->setPosition($position);
        $customLabelTextEntry->setFormat($param[2]);
        $customLabelTextEntry->setDataFields($param[3]);
        $customLabelTextEntry->setThermalFontId($param[4]);
        $customLabelTextEntry->setFontName($param[5]);
        $customLabelTextEntry->setFontSize($param[6]);
        $customLabelTextEntry->setRotation($param[7]);
        
        return $customLabelTextEntry;
    }

}
