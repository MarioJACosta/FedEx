<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RecipientCustomsId
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RecipientCustomsId extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RecipientCustomsId';

    /**
     * @param string $type
     * @return RecipientCustomsId
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $value
     * @return RecipientCustomsId
     */
    public function setValue($value) {
        return $this->Value = $value;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\RecipientCustomsId
     */
    public function setRecipientCustomsId(array $param) {

        $recipientCustomsId = new RecipientCustomsId();
        $recipientCustomsId->setType($param[0]);
        $recipientCustomsId->setValue($param[1]);

        return $recipientCustomsId;
    }

}
