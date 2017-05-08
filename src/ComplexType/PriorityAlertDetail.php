<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of PriorityAlertDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class PriorityAlertDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'PriorityAlertDetail';

    /**
     * @param string $enhancementTypes
     * @return PriorityAlertDetail
     */
    public function setEnhancementTypes($enhancementTypes) {
        return $this->EnhancementTypes = $enhancementTypes;
    }

    /**
     * @param string $content
     * @return PriorityAlertDetail
     */
    public function setContent($content) {
        return $this->Content = $content;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\PriorityAlertDetail
     */
    public function setPriorityAlertDetail(array $param) {

        $priorityAlertDetail = new PriorityAlertDetail();
        $priorityAlertDetail->setEnhancementTypes($param[0]);
        $priorityAlertDetail->setContent($param[1]);

        return $priorityAlertDetail;
    }

}
