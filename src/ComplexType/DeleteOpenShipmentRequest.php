<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DeleteOpenShipmentRequest
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DeleteOpenShipmentRequest extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DeleteOpenShipmentRequest';

    /**
     * @param string $index
     * @return DeleteOpenShipmentRequest
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

}
