<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of RetrieveOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class RetrieveOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'RetrieveOpenShipmentRequest';

    /**
     * @param string $index
     * @return RetrieveOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

}
