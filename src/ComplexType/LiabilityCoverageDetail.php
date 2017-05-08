<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of LiabilityCoverageDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LiabilityCoverageDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'LiabilityCoverageDetail';

    /**
     * @param string $coverageType
     * @return LiabilityCoverageDetail
     */
    public function setCoverageType($coverageType) {
        return $this->CoverageType = $coverageType;
    }

    /**
     * @param Money $coverageAmount
     * @return LiabilityCoverageDetail
     */
    public function setCoverageAmount($coverageAmount) {
        return $this->CoverageAmount = $coverageAmount;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\LiabilityCoverageDetail
     */
    public function setLiabilityCoverageDetail(array$param) {

        $money = new Money();

        $liabilityCoverageDetail = new LiabilityCoverageDetail();
        $liabilityCoverageDetail->setCoverageType($param[0]);
        $liabilityCoverageDetail->setCoverageAmount($money->setMoney(array_slice($param, 1)));

        return $liabilityCoverageDetail;
    }

}
