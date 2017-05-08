<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Uniquely identifies a consolidation, which is a logical container for a collection of shipments.
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConsolidationKey extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'ConsolidationKey';

    /**
     * @param string $type
     * @return ConsolidationKey
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $index
     * @return ConsolidationKey
     */
    public function setIndex($index) {
        return $this->Index = $index;
    }

    /**
     * @param Datetime $date
     * @return ConsolidationKey
     */
    public function setDate($date) {
        return $this->Date = $date;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ConsolidationKey
     */
    public function setConsolidationKey(array $param) {

        $consolidationKey = new ConsolidationKey();
        $consolidationKey->setType($param[0]);
        $consolidationKey->setIndex($param[1]);
        $consolidationKey->setDate($param[2]);

        return $consolidationKey;
    }

}
