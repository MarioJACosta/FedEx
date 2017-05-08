<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of EmailOptionsRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class EmailOptionsRequested extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'EmailOptionsRequested';

    /**
     * @param string $options
     * @return EmailOptionsRequested
     */
    public function setOptions($options) {
        return $this->Options = $options;
    }

}
