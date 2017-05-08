<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Solid (filled) rectangular area on label.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomLabelBoxEntry extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomLabelBoxEntry';

    /**
     * @param CustomLabelPosition $topLeftCorner
     * @return CustomLabelBoxEntry
     */
    public function setTopLeftCorner($topLeftCorner) {
        return $this->TopLeftCorner = $topLeftCorner;
    }

    /**
     * @param CustomLabelPosition $bottomRightCorner
     * @return CustomLabelBoxEntry
     */
    public function setBottomRightCorner($bottomRightCorner) {
        return $this->BottomRightCorner = $bottomRightCorner;
    }

    public function setCustomLabelBoxEntry($param) {

        $position = new CustomLabelPosition();
        $topLeftCorner = $position->setCustomLabelPosition(array($param[0], $param[1]));
        $bottomRightCorner = $position->setCustomLabelPosition(array($param[2], $param[3]));

        $customLabelBoxEntry = new CustomLabelBoxEntry();
        $customLabelBoxEntry->setTopLeftCorner($topLeftCorner);
        $customLabelBoxEntry->setBottomRightCorner($bottomRightCorner);

        return $customLabelBoxEntry;
    }

}
