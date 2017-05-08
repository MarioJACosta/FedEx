<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of NaftaCommodityDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class NaftaCommodityDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'NaftaCommodityDetail';

    /**
     * @param string $preferenceCriterion
     * @return NaftaCommodityDetail
     */
    public function setPreferenceCriterion($preferenceCriterion) {
        return $this->PreferenceCriterion = $preferenceCriterion;
    }

    /**
     * @param string $producerDetermination
     * @return NaftaCommodityDetail
     */
    public function setProducerDetermination($producerDetermination) {
        return $this->ProducerDetermination = $producerDetermination;
    }

    /**
     * @param string $producerId
     * @return NaftaCommodityDetail
     */
    public function setProducerId($producerId) {
        return $this->ProducerId = $producerId;
    }

    /**
     * @param string $netCostMethod
     * @return NaftaCommodityDetail
     */
    public function setNetCostMethod($netCostMethod) {
        return $this->NetCostMethod = $netCostMethod;
    }

    /**
     * @param DateRange $netCostDateRange
     * @return NaftaCommodityDetail
     */
    public function setNetCostDateRange($netCostDateRange) {
        return $this->NetCostDateRange = $netCostDateRange;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\NaftaCommodityDetail
     */
    public function setNaftaCommodityDetail(array $param) {

        $dataRange = new DateRange();

        $naftaCommodityDetail = new NaftaCommodityDetail();
        $naftaCommodityDetail->setPreferenceCriterion($param[0]);
        $naftaCommodityDetail->setProducerDetermination($param[1]);
        $naftaCommodityDetail->setProducerId($param[2]);
        $naftaCommodityDetail->setNetCostMethod($param[3]);
        $naftaCommodityDetail->setNetCostDateRange($dataRange->setDateRange(array($param[4], $param[5])));

        return $naftaCommodityDetail;
    }

}
