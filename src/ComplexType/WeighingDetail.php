<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of WeighingDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class WeighingDetail extends AbstractComplexType {

    /**
     *
     * @var strings
     */
    protected $_name = 'WeighingDetail';

    /**
     * @param string $type
     * @return WeighingDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

}
