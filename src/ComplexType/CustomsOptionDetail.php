<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomsOptionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomsOptionDetail extends AbstractComplexType {

    /**
     * @var string 
     */
    protected $_name = 'CustomsOptionDetail';

    /**
     * @param string $type
     * @return CustomsOptionDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param string $description
     * @return CustomsOptionDetail
     */
    public function setDescription($description) {
        return $this->Description = $description;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomsOptionDetail
     */
    public function setCustomsOptionDetail(array $param) {

        $customsOptionDetail = new CustomsOptionDetail();
        $customsOptionDetail->setType($param[0]);
        $customsOptionDetail->setDescription($param[1]);

        return $customsOptionDetail;
    }

}
