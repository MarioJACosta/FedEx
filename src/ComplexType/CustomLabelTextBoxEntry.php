<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomLabelTextBoxEntry extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomLabelTextBoxEntry';

    /**
     * @param CustomLabelPosition $topLeftCorner
     * @return CustomLabelTextBoxEntry
     */
    public function setTopLeftCorner($topLeftCorner) {
        return $this->TopLeftCorner = $topLeftCorner;
    }

    /**
     * @param CustomLabelPosition $bottomRightCorner
     * @return CustomLabelTextBoxEntry
     */
    public function setBottomRightCorner($bottomRightCorner) {
        return $this->BottomRightCorner = $bottomRightCorner;
    }

    /**
     * @param CustomLabelPosition $position
     * @return CustomLabelTextBoxEntry
     */
    public function setPosition($position) {
        return $this->Position = $position;
    }

    /**
     * @param string $format
     * @return CustomLabelTextBoxEntry
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param string $dataFields
     * @return CustomLabelTextBoxEntry
     */
    public function setDataFields($dataFields) {
        return $this->DataFields = $dataFields;
    }

    /**
     * @param string $ThermalFontId
     * @return CustomLabelTextBoxEntry
     */
    public function setThermalFontId($ThermalFontId) {
        return $this->ThermalFontId = $ThermalFontId;
    }

    /**
     * @param string $fontName
     * @return CustomLabelTextBoxEntry
     */
    public function setFontName($fontName) {
        return $this->FontName = $fontName;
    }

    /**
     * @param integer $fontSize
     * @return CustomLabelTextBoxEntry
     */
    public function setFontSize($fontSize) {
        return $this->FontSize = $fontSize;
    }

    /**
     * @param string $rotation
     * @return CustomLabelTextBoxEntry
     */
    public function setRotation($rotation) {
        return $this->Rotation = $rotation;
    }

    public function setCustomLabelTextBoxEntry($param) {

        $position = new CustomLabelPosition();

        $customLabelTextBoxEntry = new CustomLabelTextBoxEntry();
        $customLabelTextBoxEntry->setTopLeftCorner($position->setCustomLabelPosition(array($param[0], $param[1])));
        $customLabelTextBoxEntry->setBottomRightCorner($position->setCustomLabelPosition(array($param[2], $param[3])));
        $customLabelTextBoxEntry->setPosition($position->setCustomLabelPosition(array($param[4], $param[5])));
        $customLabelTextBoxEntry->setFormat($param[6]);
        $customLabelTextBoxEntry->setDataFields($param[7]);
        $customLabelTextBoxEntry->setThermalFontId($param[8]);
        $customLabelTextBoxEntry->setFontName($param[9]);
        $customLabelTextBoxEntry->setFontSize($param[10]);
        $customLabelTextBoxEntry->setRotation($param[11]);

        return $customLabelTextBoxEntry;
    }

}
