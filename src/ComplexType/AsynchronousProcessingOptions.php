<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AsynchronousProcessingOptions
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AsynchronousProcessingOptions extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AsynchronousProcessingOptions';

    /**
     * @param string $options
     * @return AsynchronousProcessingOptions
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

}
