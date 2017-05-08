<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Constructed string, based on format and zero or more data fields, printed in specified barcode symbology.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomLabelBarcodeEntry extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomLabelBarcodeEntry';

    /**
     * @param CustomLabelPosition $position
     * @return CustomLabelBarcodeEntry
     */
    public function setPosition($position) {
        return $this->Position = $position;
    }

    /**
     * @param string $format
     * @return CustomLabelBarcodeEntry
     */
    public function setFormat($format) {
        return $this->Format = $format;
    }

    /**
     * @param string $dataFields
     * @return CustomLabelBarcodeEntry
     */
    public function setDataFields($dataFields) {
        return $this->DataFields = $dataFields;
    }

    /**
     * @param integer $barHeight
     * @return CustomLabelBarcodeEntry
     */
    public function setBarHeight($barHeight) {
        return $this->BarHeight = $barHeight;
    }

    /**
     * @param integer $thinBarWidth
     * @return CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($thinBarWidth) {
        return $this->ThinBarWidth = $thinBarWidth;
    }

    /**
     * @param string $barcodeSymbology
     * @return CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology($barcodeSymbology) {
        return $this->BarcodeSymbology = $barcodeSymbology;
    }

    public function setCustomLabelBarcodeEntry($param) {

        $position = new CustomLabelPosition();

        $customLabelBarcodeEntry = new CustomLabelBarcodeEntry();
        $customLabelBarcodeEntry->setPosition($position->setCustomLabelPosition(array($param[0], $param[1])));
        $customLabelBarcodeEntry->setFormat($param[2]);
        $customLabelBarcodeEntry->setDataFields($param[3]);
        $customLabelBarcodeEntry->setBarHeight($param[4]);
        $customLabelBarcodeEntry->setThinBarWidth($param[5]);
        $customLabelBarcodeEntry->setBarcodeSymbology($param[6]);
        
        return $customLabelBarcodeEntry;
    }

}
