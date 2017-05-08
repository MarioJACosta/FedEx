<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of FlatbedTrailerDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class FlatbedTrailerDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'FlatbedTrailerDetail';

    /**
     * @param string $options
     * @return FlatbedTrailerDetail
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

}
