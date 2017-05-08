<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AlcoholDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AlcoholDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'AlcoholDetail';

    /**
     * @param string $recipientType
     * @return AlcoholDetail
     */
    public function setRecipientType($recipientType) {
        return $this->RecipientType = $recipientType;
    }

}
