<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of LocationSortDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class LocationSortDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'LocationSortDetail';

    /**
     * @param string $criterion
     * @return LocationSortDetail
     */
    public function setCriterion($criterion) {
        return $this->Criterion = $criterion;
    }

    /**
     * @param string $order
     * @return LocationSortDetail
     */
    public function setOrder($order) {
        return $this->Order = $order;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\LocationSortDetail
     */
    public function setLocationSortDetail(array $param) {

        $locationSortDetail = new LocationSortDetail();
        $locationSortDetail->setCriterion($param[0]);
        $locationSortDetail->setOrder($param[1]);

        return $locationSortDetail;
    }

}
