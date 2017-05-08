<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CloseWithDocumentsProcessingOptionsRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CloseWithDocumentsProcessingOptionsRequested extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CloseWithDocumentsProcessingOptionsRequested';

    /**
     * @param string $options
     * @return CloseWithDocumentsProcessingOptionsRequested
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

}
