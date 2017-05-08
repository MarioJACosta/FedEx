<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DateRange
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DateRange extends AbstractComplexType {

    /**
     * @var atring 
     */
    protected $_name = 'DateRange';

    /**
     * @param Datetime $begins
     * @return DateRange
     */
    public function setBegins($begins) {
        return $this->Begins = $begins;
    }

    /**
     * @param Datetime $ends
     * @return DateRange
     */
    public function setEnds($ends) {
        return $this->Ends = $ends;
    }

    /**
     * 
     * @param array $param
     * @return \FedEx\ComplexType\DateRange
     */
    public function setDateRange(array $param) {

        $dateRange = new DateRange();
        $dateRange->setBegins($param[0]);
        $dateRange->setEnds($param[1]);

        return $dateRange;
    }

}
