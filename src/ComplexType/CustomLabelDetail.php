<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomLabelDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomLabelDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CustomLabelDetail';

    /**
     * @param string $CoordinateUnits
     * @return CustomLabelDetail
     */
    public function setCoordinateUnits($CoordinateUnits) {
        return $this->CoordinateUnits = $CoordinateUnits;
    }

    /**
     * @param CustomLabelTextEntry $textEntries
     * @return CustomLabelDetail
     */
    public function setTextEntries($textEntries) {
        return $this->TextEntries = $textEntries;
    }

    /**
     * @param CustomLabelGraphicEntry $graphicEntries
     * @return CustomLabelDetail
     */
    public function setGraphicEntries($graphicEntries) {
        return $this->GraphicEntries = $graphicEntries;
    }

    /**
     * @param CustomLabelBoxEntry $boxEntries
     * @return CustomLabelDetail
     */
    public function setBoxEntries($boxEntries) {
        return $this->BoxEntries = $boxEntries;
    }

    /**
     * @param CustomLabelTextBoxEntry $textBoxEntries
     * @return CustomLabelDetail
     */
    public function setTextBoxEntries($textBoxEntries) {
        return $this->TextBoxEntries = $textBoxEntries;
    }

    /**
     * @param CustomLabelBarcodeEntry $barcodeEntries
     * @return CustomLabelDetail
     */
    public function setBarcodeEntries($barcodeEntries) {
        return $this->BarcodeEntries = $barcodeEntries;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomLabelDetail
     */
    public function setCustomLabelDetail(array $param) {

        $textEntries = new CustomLabelTextEntry();
        $graphicEntries = new CustomLabelGraphicEntry();
        $boxEntries = new CustomLabelBoxEntry();
        $textBoxEntries = new CustomLabelTextBoxEntry();
        $barcodeEntries = new CustomLabelBarcodeEntry();

        $customLabelDetail = new CustomLabelDetail();
        $customLabelDetail->setCoordinateUnits($param[0]);
        $customLabelDetail->setTextEntries($textEntries->setCustomLabelTextEntry(array($param[1], $param[2], $param[3], $param[4], $param[5], $param[6], $param[7], $param[8])));
        $customLabelDetail->setGraphicEntries($graphicEntries->setCustomLabelGraphicEntry(array($param[9], $param[10], $param[11], $param[12])));
        $customLabelDetail->setBoxEntries($boxEntries->setCustomLabelBoxEntry(array($param[13], $param[14], $param[15], $param[16])));
        $customLabelDetail->setTextBoxEntries($textBoxEntries->setCustomLabelTextBoxEntry(array($param[17], $param[18], $param[19], $param[20], $param[21], $param[22], $param[23], $param[24], $param[25], $param[26], $param[27], $param[28])));
        $customLabelDetail->setBarcodeEntries($barcodeEntries->setCustomLabelBarcodeEntry(array($param[29], $param[30], $param[31], $param[32], $param[33], $param[34], $param[35])));

        return $customLabelDetail;
    }

}
