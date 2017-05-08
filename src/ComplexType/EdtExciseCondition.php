<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of EdtExciseCondition
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EdtExciseCondition extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'EdtExciseCondition';

    /**
     * @param string $category
     * @return EdtExciseCondition
     */
    public function setCategory($category) {
        return $this->Category = $category;
    }

    /**
     * @param string $value
     * @return EdtExciseCondition
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\EdtExciseCondition
     */
    public function setEdtExciseCondition(array $param) {

        $edtExciseCondition = new EdtExciseCondition();
        $edtExciseCondition->setCategory($param[0]);
        $edtExciseCondition->setValue($param[1]);

        return $edtExciseCondition;
    }

}
