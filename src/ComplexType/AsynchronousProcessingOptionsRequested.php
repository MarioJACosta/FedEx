<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AsynchronousProcessingOptionsRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AsynchronousProcessingOptionsRequested extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'AsynchronousProcessingOptionsRequested';

    /**
     * @param string $options
     * @return AsynchronousProcessingOptionsRequested
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }
    
}
