<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of MarkingOrTaggingDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class MarkingOrTaggingDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'MarkingOrTaggingDetail';

    /**
     * @param integer $count
     * @return MarkingOrTaggingDetail
     */
    public function setCount($count) {
        return $this->Count = $count;
    }

}
