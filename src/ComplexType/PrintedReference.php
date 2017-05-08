<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PrintedReference
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PrintedReference extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PrintedReferences';

    /**
     * @param string $type
     * @return PrintedReferences
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $value
     * @return PrintedReferences
     */
    public function setValue($value) {
        return $this->Value = $value;
    }
    
    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\PrintedReference
     */
    public function setPrintedReference(array $param) {
        
        $printedReference = new PrintedReference();
        $printedReference->setType($param[0]);
        $printedReference->setValue($param[1]);
        
        return $printedReference;
    }

}
