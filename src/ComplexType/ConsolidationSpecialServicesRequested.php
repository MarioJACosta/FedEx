<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of ConsolidationSpecialServicesRequested
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class ConsolidationSpecialServicesRequested extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'ConsolidationSpecialServicesRequested';

    /**
     * @param string $specialServiceTypes
     * @return ConsolidationSpecialServicesRequested
     */
    public function setSpecialServiceTypes($specialServiceTypes) {
        return $this->SpecialServiceTypes = $specialServiceTypes;
    }

    /**
     * @param PriorityAlertDetail $priorityAlertDetail
     * @return ConsolidationSpecialServicesRequested
     */
    public function setPriorityAlertDetail($priorityAlertDetail) {
        return $this->PriorityAlertDetail = $priorityAlertDetail;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\ConsolidationSpecialServicesRequested
     */
    public function setConsolidationSpecialServicesRequested(array $param) {

        $priorityAlertDetail = new PriorityAlertDetail();

        $consolidationSpecialServicesRequested = new ConsolidationSpecialServicesRequested();

        $consolidationSpecialServicesRequested->setSpecialServiceTypes($param[0]);
        $consolidationSpecialServicesRequested->setPriorityAlertDetail($priorityAlertDetail->setPriorityAlertDetail(array($param[1], $param[2])));

        return $consolidationSpecialServicesRequested;
    }

}
