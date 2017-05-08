<?php

namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Description of DetentionDetail
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class DetentionDetail extends AbstractComplexType {

    /**
     * @var string
     */
    protected $_name = 'DetentionDetail';

    /**
     * @param string $duration
     * @return DetentionDetail
     */
    public function setDuration($duration) {
        return $this->Duration = $duration;
    }

}
