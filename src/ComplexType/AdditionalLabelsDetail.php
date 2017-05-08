<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of AdditionalLabelsDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class AdditionalLabelsDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'AdditionalLabelsDetail';

    /**
     * @param string $type
     * return AdditionalLabelsDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param integer $count
     * return AdditionalLabelsDetail
     */
    public function setCount($count) {
        return $this->Count = $count;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\AdditionalLabelsDetail
     */
    public function setAdditionalLabelsDetail(array $param) {

        $additionalLabelsDetail = new AdditionalLabelsDetail();

        $additionalLabelsDetail->setType($param[0]);
        $additionalLabelsDetail->setCount($param[1]);

        return $additionalLabelsDetail;
    }

}
