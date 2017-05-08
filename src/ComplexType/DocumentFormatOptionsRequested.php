<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DocumentFormatOptionsRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DocumentFormatOptionsRequested extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'DocumentFormatOptionsRequested';

    /**
     * @param string $options
     * @return DocumentFormatOptionsRequested
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

}
