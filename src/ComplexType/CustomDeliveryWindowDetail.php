<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of CustomDeliveryWindowDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class CustomDeliveryWindowDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'CustomDeliveryWindowDetail';

    /**
     * @param string $type
     * @return CustomDeliveryWindowDetail
     */
    public function setType($type) {
        return $this->Type = $type;
    }

    /**
     * @param Datetime $requestTime
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestTime($requestTime) {
        return $this->RequestTime = $requestTime;
    }

    /**
     * @param DateRange $requestRange
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestRange($requestRange) {
        return $this->RequestRange = $requestRange;
    }

    /**
     * @param Datetime $requestDate
     * @return CustomDeliveryWindowDetail
     */
    public function setRequestDate($requestDate) {
        return $thiss->RequestDate = $requestDate;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\CustomDeliveryWindowDetail
     */
    public function setCustomDeliveryWindowDetail(array $param) {

        $dateRange = new DateRange();

        $customDeliveryWindowDetail = new CustomDeliveryWindowDetail();
        $customDeliveryWindowDetail->setType($param[0]);
        $customDeliveryWindowDetail->setRequestTime($param[1]);
        $customDeliveryWindowDetail->setRequestRange($dateRange->setDateRange(array($param[2], $param[3])));
        $customDeliveryWindowDetail->setRequestDate($param[4]);

        return $customDeliveryWindowDetail;
    }

}
