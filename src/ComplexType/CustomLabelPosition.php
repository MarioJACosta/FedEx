<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomLabelPosition
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomLabelPosition extends AbstractComplexType {

    /**
     * @var atring 
     */
    protected $_name = 'CustomLabelPosition';

    /**
     * @param integer $x
     * @return CustomLabelPosition
     */
    public function setX($x) {
        return $this->X = $x;
    }

    /**
     * @param integer $y
     * @return CustomLabelPosition
     */
    public function setY($y) {
        return $this->Y = $y;
    }

    public function setCustomLabelPosition($param) {

        $customLabelPosition = new CustomLabelPosition();
        $customLabelPosition->setX($param[0]);
        $customLabelPosition->setY($param[1]);

        return $customLabelPosition;
    }

}
