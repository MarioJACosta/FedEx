<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Image to be included from printer's memory, or from a local file for offline clients.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomLabelGraphicEntry extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomLabelGraphicEntry';

    /**
     * @param CustomLabelPosition $position
     * @return CustomLabelGraphicEntry
     */
    public function setPosition($position) {
        return $this->Position = $position;
    }

    /**
     * @param string $printerGraphicId
     * @return CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($printerGraphicId) {
        return $this->PrinterGraphicId = $printerGraphicId;
    }

    /**
     * @param string $fileGraphicFullName
     * @return CustomLabelGraphicEntry
     */
    public function setFileGraphicFullName($fileGraphicFullName) {
        return $this->FileGraphicFullName = $fileGraphicFullName;
    }

    public function setCustomLabelGraphicEntry($param) {

        $position = new CustomLabelPosition();

        $customLabelGraphicEntry = new CustomLabelGraphicEntry();
        $customLabelGraphicEntry->setPosition($position->setCustomLabelPosition(array($param[0], $param[1])));
        $customLabelGraphicEntry->setPrinterGraphicId($param[2]);
        $customLabelGraphicEntry->setFileGraphicFullName($param[3]);

        return $customLabelGraphicEntry;
    }

}
