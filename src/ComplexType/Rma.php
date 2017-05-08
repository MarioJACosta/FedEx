<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Rma extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'Rma';

    /**
     * @param string $reason
     * @return Rma
     */
    public function setReason($reason) {
        return $this->Reason = $reason;
    }

}
