<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ConsolidationDataSource
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConsolidationDataSource extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConsolidationDataSource';

    /**
     * @param string $field
     * @return ConsolidationDataSource
     */
    public function setField($field) {
        return $this->Field = $field;
    }

    /**
     * @param string $source
     * @return ConsolidationDataSource
     */
    public function setSource($source) {
        return $this->Source = $source;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ConsolidationDataSource
     */
    public function setConsolidationDataSource(array $param) {
        
        $consolidationDataSource = new ConsolidationDataSource();
        
        $consolidationDataSource->setField($param[0]);
        $consolidationDataSource->setSource($param[1]);
        
        return $consolidationDataSource;
    }

}
